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

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('reservation', 'ReservationsController@index')->name('reservation');
Route::get('reservation/{id}/order', 'OrdersController@index')->name('order');
Route::get('order/product/{id}', 'ProductsController@index')->name('product');
