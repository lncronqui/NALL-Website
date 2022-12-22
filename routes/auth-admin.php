<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'create'])
            ->name('login');

        Route::post('login', [AdminLoginController::class, 'store']);

    });
    Route::middleware(['admin.auth', 'admin'])->group(function () {
        Route::post('logout', [AdminLoginController::class, 'destroy'])
            ->name('logout');
    });
});
