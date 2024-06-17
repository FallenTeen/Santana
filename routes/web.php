<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])
    ->name('dashboard');

    Route::view('karyawan', 'karyawan')
    ->middleware(['auth', 'verified', 'karyawan'])
    ->name('karyawan');

    Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

   

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
