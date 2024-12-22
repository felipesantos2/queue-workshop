<?php

// https://www.phparch.com/2024/05/phps-magic-methods/

use App\Http\Controllers\GenerateTokenController;
use App\Http\Controllers\TController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(TController::class)
    ->group(function () {
        Route::get('/filas', 'index')->name('filas.index'); // sail artisan queue:work
        Route::post('/filas', 'store')->name('filas.store');
    });

// Enviar requisição do tipo post para a rota de login via JAVASCRIPT com o axios ou a fetch API
Route::controller(GenerateTokenController::class)
    ->group(function () {
        Route::post('/login', '')->name('GenerateToken.index');
    });

Auth::loginUsingId(1);

Route::view('/', 'welcome');

