<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }

        if (!session('otp_verified')) {
            // Avoid infinite redirection loops by allowing OTP verification and logout requests
            if (!$request->is('verify-otp*') && !$request->is('logout')) {
                return redirect()->route('otp.verify');
            }
        }

        return $next($request);
    }
}
