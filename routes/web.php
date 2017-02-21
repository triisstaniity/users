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

Route::get('/users', function () {

    // $users = DB::table('users')->get();

    $users = App\Users::all();
    // return view('welcome');
    return view('users', compact ('user'));


});

Route::get('/users/create', function () {
    // return view('welcome');
    return view('create');
});

Route::get('users', 'UsersController@index');

Route::post('users', 'UsersController@create');
