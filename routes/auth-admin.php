<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'create'])
            ->name('login');

        Route::post('login', [AdminLoginController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.update');
    });
    Route::middleware(['admin.auth', 'admin'])->group(function () {
        Route::post('logout', [AdminLoginController::class, 'destroy'])
            ->name('logout');
    });
});
