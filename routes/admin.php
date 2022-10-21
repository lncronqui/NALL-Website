<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\OA\AdminArticleController;

Route::group(['prefix' => 'admin','as' => 'admin.'], function() {
    Route::middleware('admin.guest')->group(function () {
        Route::resources([
            'login' => AdminLoginController::class,
        ]);
    });
    Route::middleware(['admin.auth', 'admin'])->group(function() {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');

        Route::group(['middleware' => [], 'as' => 'overall.'], function () {
            Route::resources([
                'article' => AdminArticleController::class,
            ]);
        });

        Route::post('logout', [AdminLoginController::class, 'destroy']);
    });
});

?>
