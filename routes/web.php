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
Route::post('/', 'PageController@postHomePage');

Route::get('/detail/{id}', 'PageController@getDetail');

Route::get('/signin', 'Authentication@getSignin');
Route::post('/signin', 'Authentication@postSignin');
Route::get('/signout', 'Authentication@getSignout');

Route::get('/signup', 'Authentication@getSignup');
Route::post('/signup', 'Authentication@postSignup');

Route::get('/host/{id}', 'PageController@getHost');
Route::post('/host/{id}', 'PageController@postHost');

Route::get('/profile/{id}', 'PageController@getProfile');
Route::post('/profile/{id}', 'PageController@postProfile');

Route::get('getDistrict/{id}', 'PageController@getDistrict');
Route::get('getWard/{id}', 'PageController@getWard');


//admin
//
//
//
//

Route::get('/manager/user/list', 'ManagerUserController@getList');
Route::get('/manager/user/delete/{id}', 'ManagerUserController@deleteUser');


Route::get('/manager/house/list', 'ManagerHouseController@getList');
Route::get('/manager/house/delete/{id}', 'ManagerHouseController@deleteHouse');


Auth::routes();

