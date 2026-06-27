<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return RedirectResponse
     */
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google and log the user in.
     *
     * @return RedirectResponse
     */
    public function handleGoogleCallback(): RedirectResponse
    {
        try {
            // Using stateless() prevents session token mismatch errors (InvalidStateException)
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Find user by Google ID or by Email
            $user = User::where('google_id', $googleUser->getId())
                ->orWhere('email', $googleUser->getEmail())
                ->first();

            if ($user) {
                // If user exists, update their Google ID and token if not already set
                $user->update([
                    'google_id' => $user->google_id ?? $googleUser->getId(),
                    'google_token' => $googleUser->token,
                ]);
            } else {
                // If user doesn't exist, create a new record
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'google_token' => $googleUser->token,
                ]);

                // Assign default customer/client role
                $user->assignRole('client');
            }

            Auth::login($user);

            // Admins and Superadmins bypass OTP
            if ($user->hasRole(['superadmin', 'admin'])) {
                session(['otp_verified' => true]);
                session()->flash('success', 'Selamat datang kembali, ' . $user->name . '!');
                return redirect()->intended('/admin/dashboard');
            }

            // Set session OTP verified status to false (2-Factor OTP) for client
            session(['otp_verified' => false]);

            // Generate and send OTP for Google Logins
            $authController = new AuthController();
            $authController->generateAndSendOtp($user);

            return redirect()->route('otp.verify');

        } catch (Exception $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'Gagal masuk menggunakan Google. Silakan coba kembali. Detail: ' . $e->getMessage()
            ]);
        }
    }
}
