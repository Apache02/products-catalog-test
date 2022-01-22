#!/bin/sh
set -e

INI_FILE="/etc/php7/conf.d/50_xdebug.ini"

echo "zend_extension=xdebug.so" > $INI_FILE
echo "xdebug.mode = debug" >> $INI_FILE
echo "xdebug.client_port = 9000" >> $INI_FILE
echo "xdebug.client_host = host.docker.internal" >> $INI_FILE
echo "xdebug.start_with_request = yes" >> $INI_FILE

supervisorctl restart php-fpm
