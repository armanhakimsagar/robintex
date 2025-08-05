<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopElementController;
use App\Http\Controllers\TopBannerController;
use App\Http\Controllers\TopFeatureController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\WhyChooseUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FutureController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FrontendController;



Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard'); // make this view
    });
    Route::post('/top-elements/update/{key}', [TopElementController::class, 'update'])->name('top-elements.update');
    Route::get('/goals', [GoalController::class, 'index'])->name('goals.index');
    Route::post('goals', [GoalController::class, 'store'])->name('goal.store');
    Route::post('goals/{goal}/update', [GoalController::class, 'update'])->name('goal.update');
    Route::delete('goals/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');
    Route::prefix('top-feature')->group(function () {
        Route::get('/', [TopFeatureController::class, 'index'])->name('top-element.index');
        Route::post('/store', [TopFeatureController::class, 'store'])->name('top-element.store');
        Route::put('/update/{id}', [TopFeatureController::class, 'update'])->name('top-element.update');
        Route::delete('/delete/{id}', [TopFeatureController::class, 'destroy'])->name('top-element.destroy');
    });

    Route::get('/top-banner', [TopBannerController::class, 'index'])->name('top-banner.index');
    Route::post('/top-banner/update/{key}', [TopBannerController::class, 'update'])->name('top-banner.update');
    Route::resource('missions', MissionController::class);
    Route::get('/why-choose-us', [WhyChooseUsController::class, 'index'])->name('why.index');
    Route::post('/why-choose-us/update', [WhyChooseUsController::class, 'update'])->name('why.update');
    Route::post('/why-choose-us/reason', [WhyChooseUsController::class, 'addReason'])->name('why.reason.store');
    Route::post('/why-choose-us/reason/update/{id}', [WhyChooseUsController::class, 'updateReason'])->name('why.reason.update');
    Route::delete('/why-choose-us/reason/{id}', [WhyChooseUsController::class, 'deleteReason'])->name('why.reason.delete');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    Route::post('/projects/update/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/delete/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::get('future', [FutureController::class, 'index'])->name('future.index');
    Route::post('future', [FutureController::class, 'store'])->name('future.store');
    Route::post('future/update/{id}', [FutureController::class, 'update'])->name('future.update');
    Route::delete('future/delete/{id}', [FutureController::class, 'destroy'])->name('future.destroy');
    Route::resource('team', TeamController::class)->except(['create', 'show', 'edit']);

});

