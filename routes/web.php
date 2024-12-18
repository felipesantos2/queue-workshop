<?php

use App\Http\Controllers\TController;
use Illuminate\Support\Facades\Route;

Route::controller(TController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });
