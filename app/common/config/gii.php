<?php

return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class,
            'allowedIPs' => ['*'],
        ],
    ],
];
