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

/*
/login
/register
*/
Auth::routes();

Route::view('/', 'welcome');
Route::view('/driver-register', 'auth.driver-register');

// Route::get('/home', 'HomeController@index')->name('home');

Route::view('orders', 'orders.index');
Route::view('orders/1', 'orders.show');
Route::view('orders/create', 'orders.create');
