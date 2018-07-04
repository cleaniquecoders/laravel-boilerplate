<?php

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
