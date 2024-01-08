<?php

use App\Http\Controllers\Web\Auth\OAuth\GithubController;
use App\Http\Controllers\Web\Auth\OAuth\GoogleController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {

    Route::prefix('github')->name('github.')->controller(GithubController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');

        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::prefix('google')->name('google.')->controller(GoogleController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');

        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
