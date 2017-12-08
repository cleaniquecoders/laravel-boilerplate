<?php

return [
    'salt'     => env('hashids.salt', env('APP_KEY')),
    'length'   => env('hashids.length', 12),
    'alphabet' => env('hashids', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
];
