<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\PubTypeController;
use App\Http\Controllers\UserController;
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
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', function () {
        return view('user.home');
    })->name('home');

    Route::get('/contact-us', function () {
        return view('user.contact-us');
    });

    Route::resources([
        'users' => UserController::class,
        'articles' => ArticleController::class,
        'institutions' => InstitutionController::class,
        'pubTypes' => PubTypeController::class
    ]);
});

require __DIR__.'/auth.php';
