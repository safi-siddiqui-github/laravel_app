#!/usr/bin/env bash

/usr/bin/php /var/www/html/artisan migrate:fresh
/usr/bin/php /var/www/html/artisan storage:link