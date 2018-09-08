<?php


Route::group([
    'namespace' => 'Manage',
    'prefix'    => 'manage',
    'as'        => 'manage.',
], function () {
    Route::resource('users', 'UserController')->except('store', 'update', 'destroy');
    Route::resource('acl', 'AclController')->except('store', 'update', 'destroy');
    Route::get('passport', 'PassportController')
        ->middleware('role:developer')
        ->name('oauth.passport');
});
