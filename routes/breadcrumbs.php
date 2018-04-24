<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > Manage Passport
Breadcrumbs::register('manage.passport', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Manage Passport', route('manage.passport'));
});

// Home > Manage Users
Breadcrumbs::register('manage.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Manage Users', route('manage.users.index'));
});

// Home > Manage Users > User Details
Breadcrumbs::register('manage.users.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('manage.users.index');
    $breadcrumbs->push('User Details', route('manage.users.show', $id));
});

// Home > Manage Users > Edit User
Breadcrumbs::register('manage.users.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('manage.users.index');
    $breadcrumbs->push('Edit User', route('manage.users.edit', $id));
});

// Home > Profile
Breadcrumbs::register('user.show', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile', route('user.show'));
});

// Home > Profile > Avatar
Breadcrumbs::register('user.avatar.show', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push('Avatar', route('user.avatar.show'));
});

// Home > Profile > Security
Breadcrumbs::register('user.password.show', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push('Securty', route('user.password.show'));
});

// Home > Profile > Logs
Breadcrumbs::register('user.logs', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push('Logs', route('user.logs'));
});
