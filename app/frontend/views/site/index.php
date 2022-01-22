<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\DataProviderInterface $dataProvider
 */

use common\models\Product;
use yii\grid\GridView;
use yii\grid\SerialColumn;

$this->title = 'Index page';

?>

<div class="container-fluid">
    <h1>Products</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => SerialColumn::class,
            ],
            'name',
            [
                'attribute' => 'price1',
                'label' => 'Price',
                'value' => function (Product $model) {
                    $currency = $model->currency;

                    return sprintf(
                        '%s - %s %s',
                        sprintf($currency->format, $model->price1),
                        sprintf($currency->format, $model->price2),
                        $currency->code
                    );
                },
            ],
        ],
    ]) ?>
</div>
