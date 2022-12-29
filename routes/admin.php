<?php

use App\Http\Controllers\Admin\AccessRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MediaResourceController;
use App\Http\Controllers\Admin\Overall\ApproveController;
use App\Http\Controllers\Admin\Overall\InstitutionController;
use App\Http\Controllers\Admin\Overall\UserController;
use App\Http\Controllers\Admin\Overall\WebsiteInfoController;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin.auth', 'admin', 'user.verified']], function () {
    Route::get('/', function () {
        return view('admin.repository.index');
    })->name('index');

    Route::resource('repository', MediaResourceController::class)->only('index', 'create', 'destroy');
    Route::group(['as' => 'repository.', 'prefix' => 'repository'], function (){
        Route::group(['as' => 'view.'], function () {
            Route::get('/printed', [MediaResourceController::class, 'view_printed'])->name('printed');
            Route::get('/elec', [MediaResourceController::class, 'view_elec'])->name('elec');
            Route::get('/video', [MediaResourceController::class, 'view_video'])->name('video');
            Route::get('/audio', [MediaResourceController::class, 'view_audio'])->name('audio');
        });

        Route::group(['as' => 'create.', 'prefix' => 'create'], function () {
            Route::get('/printed', [MediaResourceController::class, 'create_printed'])->name('printed');
            Route::get('/elec', [MediaResourceController::class, 'create_elec'])->name('elec');
            Route::get('/video', [MediaResourceController::class, 'create_video'])->name('video');
            Route::get('/audio', [MediaResourceController::class, 'create_audio'])->name('audio');
        });

        Route::group(['as' => 'store.', 'prefix' => 'store'], function () {
            Route::post('/printed', [MediaResourceController::class, 'store_printed'])->name('printed');
            Route::post('/elec', [MediaResourceController::class, 'store_elec'])->name('elec');
            Route::post('/video', [MediaResourceController::class, 'store_video'])->name('video');
            Route::post('/audio', [MediaResourceController::class, 'store_audio'])->name('audio');
        });
    });

    Route::group(['as' => 'overall.', 'middleware' => 'role:overall'], function () {
        Route::resource('approve', ApproveController::class)->only('index', 'update', 'destroy');

        Route::resource('website-info', WebsiteInfoController::class)->only([
            'index'
        ]);
        Route::group(['prefix' => 'website-info', 'as' => 'website-info.'], function () {
            Route::post('/update/website-info', [WebsiteInfoController::class, 'update_website'])->name('update-website');
            Route::post('/update/contact-info', [WebsiteInfoController::class, 'update_contact'])->name('update-contact');
        });

        Route::resource('accounts', UserController::class)->only('index', 'create');
        Route::group(['prefix' => 'accounts', 'as' => 'accounts.'], function (){
            Route::group(['prefix' => 'view', 'as' => 'view.'], function (){
                Route::get('/overall-admin', [UserController::class, 'view_overall'])->name('overall');
                Route::get('/admin', [UserController::class, 'view_admin'])->name('uni');
                Route::get('/user', [UserController::class, 'view_user'])->name('user');
            });


            Route::group(['prefix' => 'create', 'as' => 'create.'], function () {
                Route::get('/overall-admin', [UserController::class, 'create_overall'])->name('overall');
                Route::get('/admin', [UserController::class, 'create_admin'])->name('uni');
            });

            Route::group(['prefix' => 'store', 'as' => 'store.'], function () {
                Route::post('/overall-admin', [UserController::class, 'store_overall'])->name('overall');
                Route::post('/admin', [UserController::class, 'store_admin'])->name('uni');
            });
        });

        Route::resource('institutions', InstitutionController::class)->only('index', 'create', 'store');


    });

    Route::resource('access-request', AccessRequestController::class)->only('index');
    Route::post('/access-request/delete', [AccessRequestController::class, 'detach'])->name('access-request.detach');

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
