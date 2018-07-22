<?php

return [
    'roles' => [
        'developer',
        'administrator',
        'user',
    ],
    'permissions' => [
        'setting'  => ['developer', 'administrator'],
        'passport' => ['developer'],
        'user'     => ['developer', 'administrator'],
        'acl'      => ['developer', 'administrator'],
    ],
    'actions' => [
        'index', 'show',
        'create', 'store',
        'edit', 'update',
        'destroy',
    ],
];
