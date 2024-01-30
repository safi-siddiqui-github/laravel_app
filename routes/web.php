<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::name('web.')->controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

Route::prefix('auth')->name('auth.')->group(function () {

    Route::prefix('github')->name('github.')->controller(GithubController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');
    });

    Route::prefix('google')->name('google.')->controller(GoogleController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('redirect');
        Route::get('/callback', 'callback');
    });
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login_post', 'login_post')->name('login_post');
        Route::post('/logout', 'logout')->name('logout');
    });
});

Route::prefix('note')->name('note.')->controller(NoteController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::fallback(function () {
    return to_route('web.home');
});
