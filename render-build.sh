#!/usr/bin/env bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
