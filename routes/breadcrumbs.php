<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push(__('Home'), route('home'));
});

collect(glob(base_path('/routes/breadcrumbs/*.php')))
    ->each(function ($path) {
        require $path;
    });
