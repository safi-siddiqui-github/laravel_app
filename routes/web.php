<?php

use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {

    Route::prefix('github')->name('github.')->controller(GithubController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');
    });

    Route::prefix('google')->name('google.')->controller(GoogleController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');
    });
});

Route::name('web.')->controller(WebController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/login_guest', 'login_guest')->name('login_guest');
    Route::get('/logout', 'logout')->name('logout');
    
    Route::get('/', 'home')->name('home');
    Route::get('/notes', 'notes')->name('notes')->middleware('auth');
    
});

Route::fallback(function () {
    return to_route('web.home');
});
