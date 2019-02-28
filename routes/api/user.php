<?php

Route::group([
    'namespace'  => 'User',
    'prefix'     => 'user',
    'as'         => 'user.',
    'middleware' => ['jwt.auth'],
], function () {
    Route::get('profile', 'ProfileController@show')->name('profile.show');
});
