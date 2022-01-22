FROM alpine:3.14

ENV APP_PATH /app
ENV RUNTIME_PATH /runtime
ENV PHP_EXTENSIONS php7-session php7-curl php7-json php7-mbstring php7-ctype php7-dom php7-fileinfo php7-iconv php7-intl php7-simplexml php7-phar php7-openssl php7-sodium php7-opcache php7-tokenizer php7-pdo php7-pgsql php7-pdo_pgsql php7-xdebug

RUN set -eux; \
    apk update; \
    apk add --no-cache shadow ca-certificates curl tar xz openssl; \
    if getent passwd www-data ; then userdel -f www-data; fi; \
    if getent group www-data ; then groupdel www-data; fi; \
    groupadd -g 1000 www-data; \
    useradd -l -u 1000 -d "/home/www-data" -g www-data www-data; \
    install -d -m 0755 -o www-data -g www-data /home/www-data; \
    [ ! -d /var/www/html ]; \
    mkdir -p /var/www/html; \
    chown www-data:www-data /var/www/html; \
    chmod 777 /var/www/html; \
    apk add --no-cache tzdata fcgi git supervisor nginx; \
    apk add --no-cache php7 php7-fpm $PHP_EXTENSIONS; \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer; \
    if [ -f "/usr/sbin/php-fpm7" ]; then ln -s /usr/sbin/php-fpm7 /usr/sbin/php-fpm; fi; \
    rm /etc/php7/php.ini \
    rm -rf /tmp/*; \
    mkdir -p $APP_PATH && chown www-data:www-data $APP_PATH; \
    mkdir -p $RUNTIME_PATH && chown www-data:www-data $RUNTIME_PATH && chmod a+w $RUNTIME_PATH


# prepare vendors
WORKDIR $APP_PATH
ADD --chown=www-data:www-data ./app/composer.* $APP_PATH/
RUN su - www-data -c "cd $APP_PATH && composer install -o"


# copy configs and scripts
COPY ./linux_root/ /
RUN chmod +x /opt/*

# copy application
ADD --chown=www-data:www-data ./app $APP_PATH

HEALTHCHECK --interval=10s --timeout=5s \
    CMD /opt/php-fpm-healthcheck.sh || exit 1

EXPOSE 80
EXPOSE 443

ENTRYPOINT supervisord
