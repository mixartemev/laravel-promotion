<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/accounts/', 'AccController@index')->name('accounts.index');
Route::get('/accounts/{acc}', 'AccController@show')->name('accounts.show');
Route::post('/accounts/{acc}/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/', 'OrderController@index')->name('orders.index');
Route::get('/orders/{order}', 'OrderController@show')->name('accounts.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
