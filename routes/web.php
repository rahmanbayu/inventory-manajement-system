<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::get('buys', 'BuyController@index')->name('buys.index');

    Route::get('employes', 'EmployeController@index')->name('employes.index');
    Route::get('employes/add', 'EmployeController@create')->name('employes.create');
    Route::post('employes/store', 'EmployeController@store')->name('employes.store');

    Route::resource('supliers', 'SuplierController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('expenses', 'ExpenseController');
    Route::resource('customers', 'CustomerController');
    Route::get('orders', 'OrderController')->name('orders.index');

    Route::get('users/profile', 'UserController@profile')->name('users.profile');
    Route::put('users/profile', 'UserController@update')->name('users.update');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes(['verify' => true]);
