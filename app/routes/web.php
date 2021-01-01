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
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ShopController@index');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/public/mycart', 'ShopController@myCart');
	Route::post('/public/mycart', 'ShopController@addMycart');
	Route::post('/public/cartdelete','ShopController@deleteCart');
	Route::post('/public/checkout', 'ShopController@checkout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




