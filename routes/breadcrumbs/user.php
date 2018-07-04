<?php


// Home > Manage Users
Breadcrumbs::register('manage.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Manage Users'), route('manage.users.index'));
});

// Home > Manage Users > User Details
Breadcrumbs::register('manage.users.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('manage.users.index');
    $breadcrumbs->push(__('User Details'), route('manage.users.show', $id));
});

// Home > Manage Users > Edit User
Breadcrumbs::register('manage.users.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('manage.users.index');
    $breadcrumbs->push(__('Edit User'), route('manage.users.edit', $id));
});
