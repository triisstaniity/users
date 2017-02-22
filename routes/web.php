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


Route::get('user/{id}', 'UsersController@show');

Route::get('/users/create',  'UsersController@create');

Route::get('users', 'UsersController@index');

Route::post('users', 'UsersController@store');

Route::get('user/{user}/delete', 'UsersController@destroy');

Route::get('user/{user}/edit', 'UsersController@edit');
