<?php

use App\Http\Controllers\ContactUsInfoController;
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

Route::resource('contact-us', ContactUsInfoController::class);

// Route::get('/contact-us', function () {
//     return view('user.contact-us');
// })->name('contact-us');

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

Route::get('/access-request', function () {
    return view('admin.access-request');
})->name('access-request');

Route::get('/useradmin-list', function () {
    return view('admin.useradmin-list');
})->name('useradmin-list');

Route::get('/institution-list', function () {
    return view('admin.institution-list');
})->name('institution-list');

Route::get('/admin-settings', function () {
    return view('admin.admin-settings');
})->name('admin-settings');

Route::get('/auth-users-settings-password', function () {
    return view('user.auth-users-settings-password');
})->name('auth-users-settings-password');

Route::get('/auth-users-settings-name', function () {
    return view('user.auth-users-settings-name');
})->name('auth-users-settings-name');

Route::get('/auth-users-settings-email', function () {
    return view('user.auth-users-settings-email');
})->name('auth-users-settings-email');

Route::get('/auth-users-settings-institution', function () {
    return view('user.auth-users-settings-institution');
})->name('auth-users-settings-institution');

Route::get('/admin-settings-name', function () {
    return view('admin.admin-settings-name');
})->name('admin-settings-name');

Route::get('/admin-settings-email', function () {
    return view('admin.admin-settings-email');
})->name('admin-settings-email');

Route::get('/admin-settings-institution', function () {
    return view('admin.admin-settings-institution');
})->name('admin-settings-institution');

Route::get('/admin-settings-password', function () {
    return view('admin.admin-settings-password');
})->name('admin-settings-password');

require __DIR__.'/auth.php';
require __DIR__.'/auth-admin.php';
require __DIR__.'/admin.php';
