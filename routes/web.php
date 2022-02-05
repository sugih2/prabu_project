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

route::get('/','MenuController@home');
route::get('/profile','MenuController@profile');
route::get('/penjualan','MenuController@penjualan');

route::resource('/stock','StockController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
