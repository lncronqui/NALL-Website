<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->middleware('auth');


Route::get('/index', function () {
    return view('index');
})->middleware('auth');


require __DIR__.'/auth.php';
