<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
