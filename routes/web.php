<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/data-table', function () {
    return view('data-table');
});


use App\Http\Controllers\ItemController;
Route::resource('items', ItemController::class);
