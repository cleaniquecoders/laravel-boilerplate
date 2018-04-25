<?php


return [
    'header' => [
        'prefix' => env('API_HEADER_PREFIX', 'CleaniqueCoders'),
        'accept' => 'application/vnd.' . env('API_HEADER_PREFIX', 'CleaniqueCoders') . '.' . env('API_VERSION', 'v1') . '+json',
    ],
    'version' => env('API_VERSION', 'v1'),
];
