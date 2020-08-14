<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::get('buys', 'BuyController@index')->name('buys.index');

    Route::get('employes', 'EmployeController@index')->name('employes.index');
    Route::get('employes/add', 'EmployeController@create')->name('employes.create');

    Route::resource('supliers', 'SuplierController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('expenses', 'ExpenseController');
    Route::resource('customers', 'CustomerController');
    Route::get('orders', 'OrderController')->name('orders.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
