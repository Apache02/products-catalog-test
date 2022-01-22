<?php

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'console\commands',
    'enableCoreCommands' => false,
    'controllerMap' => [
        'gii' => \yii\gii\console\GenerateController::class,
        'migrate' => \yii\console\controllers\MigrateController::class,
    ],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class,
        ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];
