<?php

/*
|--------------------------------------------------------------------------
| API Datatable Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API Datatable routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API Datatable!
|
 */

Route::group([
    'namespace' => 'Manage',
    'prefix'    => 'manage',
    'as'        => 'manage.',
], function () {
    Route::get('users', 'UserController')->name('user');
});
