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

Route::get('a', function () {
    echo "string";
});
Route::get('users','UsersController@index')->name('users.index');
Route::post('users/store','UsersController@store')->name('users.store');
Route::get('users/create','UsersController@create')->name('users.create');
Route::put('users/update/{id}','UsersController@update')->name('users.update');
Route::get('users/{id}/edit','UsersController@edit')->name('users.edit');
Route::get('users/show/{id}','UsersController@show')->name('users.show');
Route::delete('users/{id}','UsersController@delete')->name('users.delete');
