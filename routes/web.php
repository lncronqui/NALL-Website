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

Route::get('/ulogin', function () {
    return view('user.ulogin');
})->name('ulogin');

Route::get('/contact-us', function () {
    return view('user.contact-us');
})->name('contact-us');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
