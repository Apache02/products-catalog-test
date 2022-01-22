#!/bin/sh
set -e

INI_FILE="/etc/php7/conf.d/50_xdebug.ini"

rm $INI_FILE;

supervisorctl restart php-fpm
