<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::group([
    'namespace' => 'Auth',
    'prefix'    => 'auth',
    'as'        => 'auth.',
], function () {
    Route::post('login', 'LoginController')->name('login');
    Route::post('logout', 'LogoutController')->name('logout');
    Route::post('register', 'RegisterController')->name('register');
    Route::post('forgot/password', 'ForgotPasswordController')->name('forgot.password');
});

Route::group([
    'namespace'  => 'User',
    'prefix'     => 'user',
    'as'         => 'user.',
    'middleware' => ['jwt.auth'],
], function () {
    Route::get('profile', 'ProfileController@show')->name('profile.show');
});

/*
 * @todo protect routes, allow for self-consume API
 */
Route::group([
    'namespace' => 'Manage',
    'prefix'    => 'manage',
    'as'        => 'manage.',
], function () {
    Route::resource('users', 'UserController')->except('create', 'edit');
});
