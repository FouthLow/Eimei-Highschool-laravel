<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;


Route::get('/', function () {
    return view('home');
});

Route::get('/badminton', function () {
    return view('badminton');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/interhigh', function () {
    return view('interhigh');
});

Route::get('/senam', function () {
    return view('senam');
});

Route::get('/voli', function () {
    return view('voli');
});

Route::get('/login', function () {
    return view('login');
});

Route::prefix('admin')->name('admin.')->group(function () {

    // Guest Admin (Belum Login)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    // Authenticated Admin (Harus Login)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // Nanti halaman dashboard ditaro di resources/views/admin/dashboard.blade.php
        })->name('dashboard');

        Route::resource('berita', BeritaController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

});