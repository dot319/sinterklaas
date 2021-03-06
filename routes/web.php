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

Route::get('/about', function() {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/wishlists/store', 'WishlistController@store')->middleware('auth');
Route::get('/wishlists/{wishlist}/edit', 'WishlistController@edit')->middleware('auth');
Route::get('/wishlists/{wishlist}/update', 'WishlistController@update')->middleware('auth');
Route::get('/wishlists/{wishlist}', 'WishlistController@show');
Route::get('/wishlists', 'WishlistController@index')->middleware('auth');

Route::get('/wishes/store', 'WishController@store')->middleware('auth');
Route::get('/wishes/{wish}/delete', 'WishController@destroy')->middleware('auth');