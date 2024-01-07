<?php

use App\Http\Controllers\Auth\OAuth\GithubController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {

    Route::prefix('github')->controller(GithubController::class)->group(function () {
        Route::get('/redirect', 'redirect');
        Route::get('/callback', 'callback');
    });
});

Route::get('/', function () {
    return view('welcome');
});
