<?php


Route::group([
    'namespace' => 'User',
    'prefix'    => 'user',
    'as'        => 'user.',
], function () {
    Route::get('/', 'UserController@show')->name('show');
    Route::put('/', 'UserController@update')->name('update');
    Route::get('/password', 'PasswordController@show')->name('password.show');
    Route::put('/password', 'PasswordController@update')->name('password.update');
    Route::get('/logs', 'LogController')->name('logs');
    Route::get('/avatar', 'AvatarController@show')->name('avatar.show');
    Route::post('/avatar', 'AvatarController@store')->name('avatar.store');
});
