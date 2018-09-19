<?php 

// Home > Stats
Breadcrumbs::register('tracker.stats.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Stats'), route('tracker.stats.index'));
});

// Home > Log
Breadcrumbs::register('tracker.stats.log', function ($breadcrumbs, $uuid) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Log'), route('tracker.stats.log', $uuid));
});