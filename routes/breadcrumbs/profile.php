<?php


// Home > Profile
Breadcrumbs::register('user.show', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Profile'), route('user.show'));
});

// Home > Profile > Avatar
Breadcrumbs::register('user.avatar.show', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push(__('Avatar'), route('user.avatar.show'));
});

// Home > Profile > Security
Breadcrumbs::register('user.password.show', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push(__('Security'), route('user.password.show'));
});

// Home > Profile > Logs
Breadcrumbs::register('user.logs', function ($breadcrumbs) {
    $breadcrumbs->parent('user.show');
    $breadcrumbs->push(__('Logs'), route('user.logs'));
});
