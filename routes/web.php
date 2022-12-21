<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactUsInfoController;
use App\Http\Controllers\User\AccessRequestController;
use App\Http\Controllers\User\BookmarkController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SearchController;
use App\Models\WebsiteInfo;
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

Route::group(['as' => 'user.'], function () {
    Route::middleware('guest')->group(function () {
        Route::resource('sign-in', LoginController::class)->only(['index', 'store']);

        Route::resource('sign-up', RegisterController::class)->only(['index', 'store']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('sign-out', [LoginController::class, 'destroy'])->name('sign-out');

        Route::resource('search', SearchController::class)->only('index', 'store', 'show');
        Route::group(['as' => 'search.', 'prefix' => 'search'], function () {
            Route::post('/bookmark', [SearchController::class, 'bookmark'])->name('bookmark');
        });

        Route::resource('bookmarks', BookmarkController::class)->only('index');

        Route::get('/view-card', function () {
            return view('user.view-card');
        })->name('view-card');

        Route::resource('profile', ProfileController::class)->only('index', 'destroy');

        Route::group(['as' => 'profile.', 'prefix' => 'profile'], function () {
            Route::group(['as' => 'edit.', 'prefix' => 'edit'], function () {
                Route::get('/name', [ProfileController::class, 'edit_name'])->name('name');
                Route::get('/email', [ProfileController::class, 'edit_email'])->name('email');
                Route::get('/institution', [ProfileController::class, 'edit_institution'])->name('institution');
                Route::get('/password', [ProfileController::class, 'edit_password'])->name('password');
            });

            Route::group(['as' => 'update.', 'prefix' => 'update'], function () {
                Route::post('/name', [ProfileController::class, 'update_name'])->name('name');
                Route::post('/email', [ProfileController::class, 'update_email'])->name('email');
                Route::post('/institution', [ProfileController::class, 'update_institution'])->name('institution');
                Route::post('/password', [ProfileController::class, 'update_password'])->name('password');
            });
        });

        Route::resource('requests', AccessRequestController::class)->only('index');
        Route::post('/request-access', [AccessRequestController::class, 'request'])->name('request-access');
    });

    Route::get('/', function () {
        return view('user.index');
    })->name('index');

    Route::get('/about-us', function () {
        $websiteInfo = WebsiteInfo::find(1);
        return view('user.about-us', compact('websiteInfo'));
    })->name('about-us');

    Route::resource('contact-us', ContactUsInfoController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/auth-admin.php';
require __DIR__ . '/admin.php';
