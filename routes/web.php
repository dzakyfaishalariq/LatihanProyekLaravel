<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('guest')->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'login')->name('login');
    });
    Route::controller(LoginController::class)->group(function () {
        Route::post('/login', 'login_system')->name('l_system');
    });
});
Route::middleware('auth')->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/home', 'home')->name('home');
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});
