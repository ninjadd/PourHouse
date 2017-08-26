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


Route::get('/', 'PageController@splash');

Route::get('liquor', 'PageController@liquor');

Auth::routes();

Route::get('home', 'EventController@index')->name('home');

//Users
Route::get('user', 'UserController@index');

Route::get('user/create', 'UserController@create');

Route::post('user', 'UserController@store');

Route::get('user/{user}/edit', 'UserController@edit');

Route::put('user/{user}', 'UserController@update');

Route::delete('user/{user}', 'UserController@destroy');

//Events
Route::get('event/create', 'EventController@create');

Route::post('event', 'EventController@store');

Route::get('event/{event}/edit', 'EventController@edit');

Route::put('event/{event}', 'EventController@update');

Route::delete('event/{event}', 'EventController@destroy');

//Boozes
Route::get('booze', 'BoozeController@index');

Route::get('booze/create', 'BoozeController@create');

Route::post('booze', 'BoozeController@store');

Route::get('booze/{booze}/edit', 'BoozeController@edit');

Route::put('booze/{booze}', 'BoozeController@update');

Route::delete('booze/{booze}', 'BoozeController@destroy');

//Foods
Route::get('food', 'FoodController@index');

Route::get('food/create', 'FoodController@create');

Route::post('food', 'FoodController@store');

Route::get('food/{food}/edit', 'FoodController@edit');

Route::put('food/{food}', 'FoodController@update');

Route::delete('food/{food}', 'FoodController@destroy');