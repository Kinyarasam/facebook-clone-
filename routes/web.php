<?php

use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/login', function () {
    // return view('auth/login.index');
// });

Route::get('/auth', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth');
// Route::get('/login', [LoginController::class, 'index'])->name('login');