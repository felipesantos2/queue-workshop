<?php

use App\Http\Controllers\GenerateTokenController;
use App\Http\Controllers\TController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(TController::class)
    ->group(function () {
        Route::get('/filas', 'index')->name('filas.index');
        Route::post('/filas', 'store')->name('filas.store');
    });

Route::controller(GenerateTokenController::class)
    ->group(function () {
        Route::get('/login')->name('GenerateToken.index');
    });

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
