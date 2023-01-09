<?php

use Illuminate\Support\Facades\Route;

// -------------- default laravel Route -----------------

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//-------------- admin Route -------------------

Route::resource('shop', 'ShopController');
