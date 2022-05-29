#!/bin/sh

cd /var/www
php artisan migrate:fresh
php artisan db:seed
php artisan serve
