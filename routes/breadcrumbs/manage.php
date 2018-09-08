<?php


// Home > Manage ACL
Breadcrumbs::register('manage.acl.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Manage ACL'), route('manage.acl.index'));
});

// Home > Manage OAuth
Breadcrumbs::register('manage.oauth.passport', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Manage OAuth'), route('manage.oauth.passport'));
});
