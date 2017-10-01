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

//MenuItems
Route::get('menu', 'MenuItemController@index');

Route::get('menu/create', 'MenuItemController@create');

Route::post('menu', 'MenuItemController@store');

Route::get('/menu/{menuItem}/edit', 'MenuItemController@edit');

Route::put('menu/{menuItem}', 'MenuItemController@update');

Route::delete('menu/{menuItem}', 'MenuItemController@destroy');