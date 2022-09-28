<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\PubTypeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resources([
    'articles' => ArticleController::class,
    'institutions' => InstitutionController::class,
    'pubTypes' => PubTypeController::class
]);

require __DIR__.'/auth.php';
