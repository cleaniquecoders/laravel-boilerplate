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

Route::get('/', 'WelcomeController')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'namespace' => 'User',
    'prefix'    => 'user',
    'as'        => 'user.',
], function () {
	Route::get('/', 'UserController@show')->name('show');
	Route::put('/', 'UserController@update')->name('update');
    Route::get('/logs', 'LogController')->name('logs');
    Route::get('/avatar', 'AvatarController@show')->name('avatar.show');
    Route::post('/avatar', 'AvatarController@store')->name('avatar.store');
});
