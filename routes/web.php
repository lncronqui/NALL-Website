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
    return view('user.index');
})->name('index');

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::get('/contact-us', function () {
    return view('user.contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('user.about-us');
})->name('about-us');

Route::get('/user-login', function () {
    return view('user.user-login');
})->name('user-login');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
