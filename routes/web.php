<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// Route::get('/dashboard', [App\Http\Controllers\Auth\LoginController::class, 'dash'])->name('dashboard');

Route::get('/{path}', [App\Http\Controllers\Auth\LoginController::class, 'index'])->where('path', '([A-z\-\/_.]+)?' );
