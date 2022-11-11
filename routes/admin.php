<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MediaResourceController;
use App\Http\Controllers\Admin\Overall\InstitutionController;
use App\Http\Controllers\Admin\Overall\UserController;
use App\Http\Controllers\Admin\Overall\WebsiteInfoController;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin.auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');

    Route::resource('profile', ProfileController::class)->only([
        'index', 'update', 'destroy'
    ]);

    Route::group(['prefix' => '/media', 'as' => 'media.'], function() {
        Route::get('/view-approved', [MediaResourceController::class, 'view_approved'])->name('view_approved');
        Route::get('/view-to-approve', [MediaResourceController::class, 'view_to_approve'])->name('view_to_approve');
        Route::get('/to-delete', [MediaResourceController::class, 'view_to_delete'])->name('view_to_delete');
        Route::put('/to-delete/{mediaResource}', [MediaResourceController::class, 'to_delete'])->name('to_delete');
    });

    Route::resource('media', MediaResourceController::class)->except([
        'show'
    ]);

    Route::group(['as' => 'overall.', 'middleware' => 'role:overall'], function () {
        Route::resource('accounts', UserController::class);

        Route::resource('website-info', WebsiteInfoController::class)->only([
            'index', 'update'
        ]);
        Route::resource('institutions', InstitutionController::class)->except([
            'show',
        ]);
        Route::group(['prefix' => '/media', 'as' => 'media.'], function() {
            Route::get('/deleted', [MediaResourceController::class, 'view_deleted'])->name('view_deleted');
            Route::patch('/approve/{mediaResource}', [MediaResourceController::class, 'approve'])->name('approve');
        });
    });

    Route::group(['as' => 'univ.', 'middleware' => 'role:univ'], function () {

    });
});
