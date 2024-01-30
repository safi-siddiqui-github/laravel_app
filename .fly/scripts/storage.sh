#!/usr/bin/env bash

/usr/bin/php /var/www/html/artisan migrate --force --seed
# /usr/bin/php /var/www/html/artisan storage:link
