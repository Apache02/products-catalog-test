<?php

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') === 'true');
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') ?? 'dev');

require __DIR__ . '/../../vendor/autoload.php';

require __DIR__ . '/../../common/config/bootstrap.php';

require __DIR__ . '/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../config/web.php'
);

if (YII_DEBUG) {
    $config = \yii\helpers\ArrayHelper::merge(
        $config,
        require __DIR__ . '/../../common/config/debug.php'
    );
}

if (YII_ENV === 'dev') {
    $config = \yii\helpers\ArrayHelper::merge(
        $config,
        require __DIR__ . '/../../common/config/gii.php'
    );
}

try {
    (new \yii\web\Application($config))->run();
} catch (\yii\base\InvalidConfigException $exception) {
    echo 'Exception: ', $exception->getMessage(), "\n";
}
