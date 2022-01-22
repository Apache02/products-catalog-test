<?php

$params = array_merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/../../environments/' . YII_ENV . '/params.php'
);

return [
    'id' => 'app-dummy',
    'aliases' => [],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'runtimePath' => empty(getenv('RUNTIME_PATH')) ? '/tmp' : getenv('RUNTIME_PATH'),
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => $params['dbDsn'],
            'charset' => 'utf8',
        ],
    ],
    'params' => $params,
];
