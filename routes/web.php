<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Фронт
Route::name('front.')
    ->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('main');
    });