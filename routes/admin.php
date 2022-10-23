<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Overall\InstitutionController;
use App\Http\Controllers\Admin\Overall\WebsiteInfoController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin.auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');

    Route::get('/articles/view', 'App\Http\Controllers\Admin\AdminArticleController@view')->name('articles.view');
    Route::resources([
        'articles' => AdminArticleController::class
    ]);

    Route::group(['as' => 'overall.', 'middleware' => 'admin.role:overall'], function () {
        Route::resource('website-info', WebsiteInfoController::class)->only([
            'index', 'update'
        ]);
        Route::resource('institutions', InstitutionController::class)->except([
            'show',
        ]);
    });
});
