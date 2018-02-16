<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
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
