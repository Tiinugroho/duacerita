<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    /**
     * Handle a login request.
     *
     * @throws ValidationException
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->has('remember');

        // Check if the user email already exists in the database
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            // Auto-register unregistered email address
            $username = explode('@', $credentials['email'])[0];
            $formattedName = ucwords(str_replace(['.', '_', '-'], ' ', $username));
            
            $user = User::create([
                'name' => $formattedName,
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
            ]);

            // Assign default customer/client role
            $user->assignRole('client');

            Auth::login($user);

            // Set session OTP verified status to false (2-Factor OTP)
            session(['otp_verified' => false]);

            // Generate and send OTP upon auto-registration
            $this->generateAndSendOtp($user);

            return redirect()->route('otp.verify');
        }

        // Email exists in database, attempt standard login
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Set session OTP verified status to false for all logins (2-Factor OTP)
            session(['otp_verified' => false]);

            // Always generate and send OTP on login
            $this->generateAndSendOtp($user);

            return redirect()->route('otp.verify');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Show the registration form.
     */
    public function showRegisterForm(): View
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     */
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Default role assignment for new users
        $user->assignRole('client');

        Auth::login($user);

        // Set session OTP verified status to false (2-Factor OTP)
        session(['otp_verified' => false]);

        // Generate and send OTP upon fresh registration
        $this->generateAndSendOtp($user);

        return redirect()->route('otp.verify');
    }

    /**
     * Show the OTP verification form.
     */
    public function showOtpForm(): View
    {
        return view('auth.verify-otp');
    }

    /**
     * Handle OTP verification code check.
     */
    public function verifyOtp(Request $request): RedirectResponse
    {
        $request->validate([
            'otp_code' => ['required', 'string', 'size:6'],
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Validate code matches and hasn't expired (valid for 10 minutes)
        if ($user->otp_code === $request->otp_code && $user->otp_expires_at && $user->otp_expires_at->isFuture()) {
            // Set session verified state to true (passes middleware)
            session(['otp_verified' => true]);

            // If their account email_verified_at was never set, mark it as verified
            if (is_null($user->email_verified_at)) {
                $user->email_verified_at = now();
            }

            // Clear OTP fields in the database
            $user->otp_code = null;
            $user->otp_expires_at = null;
            $user->save();

            return $this->redirectUserAfterLogin($user);
        }

        throw ValidationException::withMessages([
            'otp_code' => 'Kode OTP tidak cocok atau sudah kedaluwarsa.',
        ]);
    }

    /**
     * Resend a fresh OTP verification code.
     */
    public function resendOtp(Request $request): RedirectResponse
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $this->generateAndSendOtp($user);

        return back()->with('status', 'Kode OTP baru telah dikirimkan ke email Anda.');
    }

    /**
     * Redirect the user based on their roles.
     *
     * @param User $user
     * @return RedirectResponse
     */
    protected function redirectUserAfterLogin(User $user): RedirectResponse
    {
        if ($user->hasRole(['superadmin', 'admin'])) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended('/customer/dashboard');
    }

    /**
     * Helper: Generate 6-digit random code and dispatch via Mail.
     *
     * @param User $user
     */
    public function generateAndSendOtp(User $user): void
    {
        $otp = sprintf('%06d', mt_rand(100000, 999999));

        // Use direct property assignment to bypass mass-assignment filters
        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();

        try {
            Mail::to($user->email)->send(new \App\Mail\SendOtpMail($otp, $user->name));
        } catch (\Exception $e) {
            logger()->error('Gagal mengirim email OTP: ' . $e->getMessage());
        }
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
