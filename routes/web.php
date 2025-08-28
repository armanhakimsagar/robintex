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
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordController;



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [FrontendController::class, 'index']);

Route::get('/sustainability', [AboutUsController::class, 'show'])->name('sustainability.page');
Route::get('/leadership', [AboutUsController::class, 'leadership'])->name('leadership.page');
Route::get('/journey', [AboutUsController::class, 'journey'])->name('journey.page');
Route::get('/client', [AboutUsController::class, 'client'])->name('client.page');

Route::get('/service', [ServiceController::class, 'show'])->name('service.page');
Route::get('/project', [ServiceController::class, 'product'])->name('product.page');
Route::get('/teams', [ServiceController::class, 'team'])->name('teams.page');
Route::get('/our-portfolio', [ServiceController::class, 'portfolio'])->name('portfolio.page');
Route::get('/contact-us', [ServiceController::class, 'contact'])->name('contact.us');
Route::get('/getintouch', [ServiceController::class, 'getintouch'])->name('getintouch');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard'); // make this view
    });
    Route::get('/change-password', [PasswordController::class, 'showChangeForm'])->name('password.change.form');
    Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('password.change');
    // Admin/Dashboard Route
    Route::match(['get', 'post'], '/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::match(['get', 'post'], '/contact', [ContactController::class, 'index'])->name('contact.index');

    Route::get('/sustainability-page', [AboutUsController::class, 'index'])->name('about.index');
    
    Route::post('/about-us-page', [AboutUsController::class, 'store'])->name('about.store');
    Route::post('/journey-page', [AboutUsController::class, 'journeyStore'])->name('journey.store');
    Route::post('/client-page', [AboutUsController::class, 'clientStore'])->name('client.store');
    Route::post('/leadership-page', [AboutUsController::class, 'leadershipStore'])->name('leadership.store');

    Route::get('/journey-page', [AboutUsController::class, 'journeyd'])->name('about.journey');
    Route::get('/leadership-page', [AboutUsController::class, 'leadershipd'])->name('about.leadership');
    Route::get('/client-page', [AboutUsController::class, 'clientd'])->name('about.client');

    Route::get('/top-element', [TopElementController::class, 'index'])->name('top-element.index');
    Route::post('/top-element/update/{key}', [TopElementController::class, 'update'])->name('top-elements.update');
    Route::get('/goals', [GoalController::class, 'index'])->name('goals.index');
    Route::post('goals', [GoalController::class, 'store'])->name('goal.store');
    Route::post('goals/{goal}/update', [GoalController::class, 'update'])->name('goal.update');
    Route::delete('goals/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');
    Route::prefix('top-feature')->group(function () {
        Route::get('/', [TopFeatureController::class, 'index'])->name('top-feature.index');
        Route::post('/store', [TopFeatureController::class, 'store'])->name('top-feature.store');
        Route::put('/update/{id}', [TopFeatureController::class, 'update'])->name('top-feature.update');
        Route::delete('/delete/{id}', [TopFeatureController::class, 'destroy'])->name('top-feature.destroy');
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
    Route::resource('services', ServiceController::class);

});

