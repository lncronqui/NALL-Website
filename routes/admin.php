<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

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
        Route::post('logout', [AdminLoginController::class, 'destroy']);
    });
});

?>
