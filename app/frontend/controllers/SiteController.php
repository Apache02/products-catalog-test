<?php

namespace frontend\controllers;

use common\models\Product;
use frontend\components\Controller;
use yii\data\ActiveDataProvider;
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
