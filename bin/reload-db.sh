#!/bin/bash

php artisan reload:cache
php artisan reload:db
php artisan passport:install