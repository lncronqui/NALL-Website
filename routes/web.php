<?php

use App\Http\Controllers\AdminLoginController;
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



Route::group(['prefix' => 'admin','as' => 'admin.'], function() {
    Route::middleware('admin.guest')->group(function () {
        Route::resources([
            'login' => AdminLoginController::class,
        ]);
    });
    Route::middleware(['admin.auth', 'admin'])->group(function() {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');
        Route::post('logout', [AdminLoginController::class, 'destroy']);
    });
});

Route::get('/', function () {
    return view('user.index');
})->name('index');

Route::get('/home', function () {
    return view('dashboard');
})->name('home');


require __DIR__.'/auth.php';
