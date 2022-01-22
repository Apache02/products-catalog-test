<?php

use yii\db\Migration;

class m220122_224152_create_table_product extends Migration
{
    public function safeUp()
    {
        $this->createTable('product', [
            'product_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->defaultValue(''),
            'description' => $this->text()->notNull()->defaultValue(''),
            'price1' => $this->float(8)->notNull()->defaultValue(0.0),
            'price2' => $this->float(8)->notNull()->defaultValue(0.0),
            'currency_id' => $this->integer()->notNull()->defaultValue(0),
        ]);

        return true;
    }

    public function safeDown()
    {
        $this->dropTable('product');

        return true;
    }
}
