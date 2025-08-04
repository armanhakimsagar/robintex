<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopElementController;
use App\Http\Controllers\TopBannerController;
use App\Http\Controllers\TopFeatureController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\WhyChooseUsController;


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard'); // make this view
    });
    Route::get('/goals', [GoalController::class, 'index'])->name('goals.index');
    Route::post('goals', [GoalController::class, 'store'])->name('goal.store');
    Route::post('goals/{goal}/update', [GoalController::class, 'update'])->name('goal.update');
    Route::delete('goals/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');
    Route::get('/top-feature', [TopFeatureController::class, 'index'])->name('top-feature.index');
    Route::post('/top-feature/{field}', [TopFeatureController::class, 'update'])->name('top-feature.update');
    Route::get('/top-element', [TopElementController::class, 'index'])->name('top-element.index');
    Route::post('/top-element/update/{key}', [TopElementController::class, 'update'])->name('top-element.update');
    Route::get('/top-banner', [TopBannerController::class, 'index'])->name('top-banner.index');
    Route::post('/top-banner/update/{key}', [TopBannerController::class, 'update'])->name('top-banner.update');
    Route::resource('missions', MissionController::class);
    Route::get('/why-choose-us', [WhyChooseUsController::class, 'index'])->name('why.index');
    Route::post('/why-choose-us/update', [WhyChooseUsController::class, 'update'])->name('why.update');
    Route::post('/why-choose-us/reason', [WhyChooseUsController::class, 'addReason'])->name('why.reason.store');
    Route::post('/why-choose-us/reason/update/{id}', [WhyChooseUsController::class, 'updateReason'])->name('why.reason.update');
    Route::delete('/why-choose-us/reason/{id}', [WhyChooseUsController::class, 'deleteReason'])->name('why.reason.delete');

});

