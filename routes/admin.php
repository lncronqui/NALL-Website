<?php

use App\Http\Controllers\Admin\AccessRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MediaResourceController;
use App\Http\Controllers\Admin\Overall\ApproveController;
use App\Http\Controllers\Admin\Overall\InstitutionController;
use App\Http\Controllers\Admin\Overall\UserController;
use App\Http\Controllers\Admin\Overall\WebsiteInfoController;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin.auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.repository.index');
    })->name('index');

    Route::resource('repository', MediaResourceController::class);

    Route::group(['as' => 'overall.', 'middleware' => 'role:overall'], function () {
        Route::resource('approve', ApproveController::class)->only('index', 'update');
        Route::group(['prefix' => 'approve', 'as' => 'approve.'], function () {
            Route::put('/accept/{mediaResource}', [ApproveController::class, 'accept'])->name('accept');
            Route::put('/deny/{mediaResource}', [ApproveController::class, 'deny'])->name('deny');
        });

        Route::resource('website-info', WebsiteInfoController::class)->only([
            'index'
        ]);
        Route::group(['prefix' => 'website-info', 'as' => 'website-info.'], function () {
            Route::post('/update/website-info', [WebsiteInfoController::class, 'update_website'])->name('update-website');
            Route::post('/update/contact-info', [WebsiteInfoController::class, 'update_contact'])->name('update-contact');
        });

        Route::resource('accounts', UserController::class)->only('index', 'create');
        Route::group(['prefix' => 'accounts/store', 'as' => 'accounts.store.'], function (){
            Route::post('/overall-admin', [UserController::class, 'store_overall'])->name('overall-admin');
            Route::post('/admin', [UserController::class, 'store_admin'])->name('admin');
        });

        Route::resource('institutions', InstitutionController::class)->except([
            'show',
        ]);

    });

    Route::resource('access-request', AccessRequestController::class)->only('index');

    Route::resource('profile', ProfileController::class)->only([
        'index', 'destroy'
    ]);
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::group(['prefix' => 'edit','as' => 'edit.'], function () {
            Route::get('/name', [ProfileController::class, 'edit_name'])->name('name');

            Route::get('/email', [ProfileController::class, 'edit_email'])->name('email');

            Route::get('/institution', [ProfileController::class, 'edit_institution'])->name('institution');

            Route::get('/password', [ProfileController::class, 'edit_password'])->name('password');
        });

        Route::group(['prefix' => 'update', 'as' => 'update.'], function () {
            Route::post('/name', [ProfileController::class, 'update_name'])->name('name');

            Route::post('/email', [ProfileController::class, 'update_email'])->name('email');

            Route::post('/institution', [ProfileController::class, 'update_institution'])->name('institution');

            Route::post('/password', [ProfileController::class, 'update_password'])->name('password');
        });
    });
});
