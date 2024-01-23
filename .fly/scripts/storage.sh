#!/usr/bin/env bash

/usr/bin/php /var/www/html/artisan migrate --seed
/usr/bin/php /var/www/html/artisan storage:link
