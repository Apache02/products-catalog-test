<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "currency".
 *
 * @property int $currency_id
 * @property string|null $name
 * @property string $code
 * @property string $format
 * @property bool $enabled
 * @property int $priority
 * @property Product[] $products
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['enabled'], 'boolean'],
            [['priority'], 'default', 'value' => null],
            [['priority'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 3],
            [['format'], 'string', 'max' => 16],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'currency_id' => 'Currency ID',
            'name' => 'Name',
            'code' => 'Code',
            'format' => 'Format',
            'enabled' => 'Enabled',
            'priority' => 'Priority',
        ];
    }

    public function getProducts(): ActiveQuery
    {
        return $this->hasMany(Product::class, ['currency_id' => 'currency_id']);
    }
}
