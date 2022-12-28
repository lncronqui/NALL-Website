<?php

use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'user.'], function () {
    Route::middleware('guest')->group(function () {
        Route::resource('sign-in', LoginController::class)->only(['index', 'store']);

        Route::resource('sign-up', RegisterController::class)->only(['index', 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.update');
    });

    Route::middleware('auth')->group(function () {
        Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
            ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware('throttle:6,1')
            ->name('verification.send');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('sign-out', [LoginController::class, 'destroy'])->name('user.sign-out');
});

Route::middleware('guest')->group(function () {

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});
