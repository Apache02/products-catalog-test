# Products Catalog Website

Yii2 example application.

## Prerequisite

* [docker](https://www.docker.com/) (tested on version 20.10.7-0ubuntu5~20.04.2)
* [docker-compose](https://docs.docker.com/compose/install/) (tested on version 1.25.0)
* [make](https://www.gnu.org/software/make/) (tested on version 4.2.1)

## What's inside

* supervisor
* php 7.4 and php-fpm 7.4
* nginx
* startup shell scripts

## Database

Currently used [PostgreSQL](https://www.postgresql.org/).

## Environment variables

* `STARTUP_UPDATE_VENDORS` - if "true" runs `composer install -o` on startup. Used for local development.
* `YII_ENV` - "dev" or "prod".
* `YII_DEBUG` - "true" to enable yii debug module.
* `DATABASE_DSN` - database config
* `COOKIE_VALIDATION_KEY` - value for `\yii\web\Request::cookieValidationKey`

## Debug

[Debug readme](docs/debug.md)


## Get started (run locally)

```shell script
make up
```

## All shell commands

```shell script
make help
```