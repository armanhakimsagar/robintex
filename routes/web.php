<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopElementController;
use App\Http\Controllers\TopBannerController;


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard'); // make this view
    });
    Route::get('/top-element', [TopElementController::class, 'index'])->name('top-element.index');
    Route::post('/top-element/update/{key}', [TopElementController::class, 'update'])->name('top-element.update');
    Route::get('/top-banner', [TopBannerController::class, 'index'])->name('top-banner.index');
    Route::post('/top-banner/update/{key}', [TopBannerController::class, 'update'])->name('top-banner.update');

});

