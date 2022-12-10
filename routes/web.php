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

Route::get('/user-signup', function () {
    return view('user.user-signup');
})->name('user-signup');

Route::get('/auth-user-home', function () {
    return view('user.auth-user-home');
})->name('auth-user-home');

Route::get('/auth-user-aboutus', function () {
    return view('user.auth-user-aboutus');
})->name('auth-user-aboutus');

Route::get('/auth-user-search', function () {
    return view('user.auth-user-search');
})->name('auth-user-search');

Route::get('/auth-user-contactus', function () {
    return view('user.auth-user-contactus');
})->name('auth-user-contactus');

Route::get('/auth-user-bookmark', function () {
    return view('user.auth-user-bookmark');
})->name('auth-user-bookmark');

Route::get('/auth-user-settings', function () {
    return view('user.auth-user-settings');
})->name('auth-user-settings');

Route::get('/auth-view-req', function () {
    return view('user.auth-view-req');
})->name('auth-view-req');

Route::get('/repository', function () {
    return view('admin.repository');
})->name('repository');

Route::get('/approving', function () {
    return view('admin.approving');
})->name('approving');

require __DIR__.'/auth.php';
require __DIR__.'/auth-admin.php';
require __DIR__.'/admin.php';
