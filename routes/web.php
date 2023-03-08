<?php

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

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');

Route::get('/oauth')->name('oauth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
