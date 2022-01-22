<?php

use yii\db\Migration;

class m220122_222752_insert_currencies extends Migration
{
    public function safeUp()
    {
        $this->batchInsert('currency', [
            'name', 'code', 'format', 'enabled', 'priority',
        ], [
            ['United States dollar', 'USD', '%.02f', true, 99],
            ['Euro', 'EUR', '%.02f', true, 98],
            ['Ukrainian hryvnia', 'UAH', '%.02f', false, 0],
            ['Russian ruble', 'RUB', '%.02f', false, 0],
            ['Bitcoin', 'BTC', '%.08f', false, 0],
            ['Ethereum', 'ETH', '%.06f', false, 0],
        ]);

        return true;
    }

    public function safeDown()
    {
        $this->delete('currency');

        return true;
    }
}
