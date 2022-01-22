<?php

namespace frontend\controllers;

use frontend\components\Controller;
use yii\web\ErrorAction;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'view' => 'error',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
