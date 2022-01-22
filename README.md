# Products Catalog Website

Yii2 example application.

## Includes

* supervisor
* php 7.4 and php-fpm 7.4
* nginx
* startup shell scripts

## Debug

[Debug readme](docs/debug.md)

## Env variables

* `STARTUP_UPDATE_VENDORS` - if "true" runs `composer install -o` on startup. Used for local development.
* `YII_ENV` - "dev" or "prod".
* `YII_DEBUG` - "true" to enable yii debug module.
* `DATABASE_DSN` - database config
* `COOKIE_VALIDATION_KEY` - value for `\yii\web\Request::cookieValidationKey`


## Database

Currently used [PostgreSQL](https://www.postgresql.org/).