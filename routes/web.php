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

Route::get('/', 'PageController@getHomePage');

Route::get('/detail/{id}', 'PageController@getDetail');

Route::get('/signin', 'Authentication@getSignin');
Route::post('/signin', 'Authentication@postSignin');

Route::get('/signup', 'Authentication@getSignup');
Route::post('/signup', 'Authentication@postSignup');

Route::get('/host/{id}', 'PageController@getHost');

Route::get('/profile/{id}', 'PageController@getProfile');
Route::post('/profile/{id}', 'PageController@postProfile');

route::get('getDistrict/{id}', 'PageController@getDistrict');
route::get('getWard/{id}', 'PageController@getWard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
