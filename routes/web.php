<?php

use App\Http\Controllers\Web\Auth\GithubController;
use App\Http\Controllers\Web\Auth\GoogleController;
use App\Http\Controllers\Web\Auth\WebAuthController;
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

    Route::prefix('web')->name('web.')->controller(WebAuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/login_guest', 'login_guest')->name('login_guest');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('web')->name('web.')->controller(WebAuthController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
});

Route::fallback(function () {
    return to_route('web.home');
});
