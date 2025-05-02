<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});
// Semua route ini hanya untuk user yang sudah login
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

    // Kalau kamu punya layout utama di layouts/app.blade.php
    Route::get('/layout', function () {
        return view('layouts.app');
    });
});

// Routes login, register, logout, dll
Auth::routes();
