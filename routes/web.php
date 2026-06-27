<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'otp.verified']);

Route::get('/customer/dashboard', function () {
    return view('customer.dashboard');
})->middleware(['auth', 'otp.verified']);

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// OTP Verification Routes
Route::middleware('auth')->group(function () {
    Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('otp.verify');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('/verify-otp/resend', [AuthController::class, 'resendOtp'])->name('otp.resend');
});

Route::get('/forgot-password', function () {
    return 'Halaman Lupa Kata Sandi... (Silakan hubungkan dengan controller password reset)';
})->name('password.request');

// Google OAuth endpoints
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
