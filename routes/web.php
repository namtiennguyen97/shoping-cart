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

Route::get('/shop','ProductController@index')->name('home.index');

Route::get('/cart','ShoppingCartController@index')->name('cart.index');

Route::get('/add-to-cart/{id}', 'ShoppingCartController@addToCart')->name('cart.addToCart');
Route::get('/remove-to-cart/{id}', 'ShoppingCartController@removeProductIntoCart')->name('cart.removeProductIntoCart');
Route::post('/update-to-cart/{id}', 'ShoppingCartController@updateProductIntoCart')->name('cart.updateProductIntoCart');

Route::get('/login','LoginController@showLogin')->name('login.index');
Route::post('/login','LoginController@login');

Route::get('/show/{id}','ProductController@show')->name('home.show');
Route::get('/','ProductController@main')->name('home.main');

Route::group(['prefix'=>'products'],function (){
   Route::get('/','ProductController@index')->name('products.index');
   Route::get('/create','ProductController@create')->name('products.create');
   Route::post('/create','ProductController@store')->name('products.store');
   Route::get('{id}/edit','ProductController@edit')->name('products.edit');
   Route::post('/{id}/edit','ProductController@update')->name('products.update');
   Route::get('/{id}/destroy','ProductController@destroy')->name('products.destroy');
});
Route::get('/home','ProductController@home')->name('display');
Route::get('/autho','ProductController@autho')->name('autho');
