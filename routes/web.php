<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        abort(404);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
