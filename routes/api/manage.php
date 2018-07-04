<?php 

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