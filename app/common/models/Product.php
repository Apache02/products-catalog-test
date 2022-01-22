<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $name
 * @property string $description
 * @property float $price1
 * @property float $price2
 * @property int $currency_id
 * @property Currency $currency
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['price1', 'price2'], 'number'],
            [['currency_id'], 'default', 'value' => null],
            [['currency_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'name' => 'Name',
            'description' => 'Description',
            'price1' => 'Price1',
            'price2' => 'Price2',
            'currency_id' => 'Currency ID',
        ];
    }

    public function getCurrency(): ActiveQuery
    {
        return $this->hasOne(Currency::class, ['currency_id' => 'currency_id']);
    }
}
