<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return back()->withInput()->withErrors(['email' => 'Fungsi autentikasi backend belum diaktifkan. Silakan hubungkan controller Anda.']);
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    return back()->withInput()->withErrors(['email' => 'Fungsi registrasi backend belum diaktifkan. Silakan hubungkan controller Anda.']);
});

Route::get('/forgot-password', function () {
    return 'Halaman Lupa Kata Sandi... (Silakan hubungkan dengan controller password reset)';
})->name('password.request');

// Google OAuth endpoints
Route::get('/auth/google', function () {
    return 'Mengarahkan ke Google Sign-In... (Gunakan Laravel Socialite untuk menghubungkan Google API)';
})->name('google.login');

Route::get('/auth/google/callback', function () {
    return 'Callback Google Sign-In... (Gunakan Laravel Socialite untuk memproses data dari Google)';
});
