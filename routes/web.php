<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/')
->uses('ProductController@getIndex')
->name('product.index');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/profile')
->uses('UserController@getProfile')
->name('user.profile')
->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('add-to-cart/{id}')
->uses('ProductController@getAddToCart')
->name('product.addtocart');

Route::get('shoppingCart')
->uses('ProductController@getCart')
->name('products.shoppingCart');

Route::get('reduceOne/{id}')
->uses('ProductController@getReduceOne')
->name('products.reduceOne');

Route::get('removeAll/{id}')
->uses('ProductController@getRemoveAll')
->name('products.removeAll');

Route::get('checkout')
->uses('ProductController@getCheckout')
->name('checkout')->middleware('auth');

Route::post('checkout')
->uses('ProductController@postCheckout')
->name('checkout')
->middleware('auth');

Route::get('/logout')
->uses('Auth\LoginController@logout')
->name('user.logout');