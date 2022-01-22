<?php

use yii\db\Migration;

class m220122_221227_create_table_currency extends Migration
{
    public function safeUp()
    {
        $this->createTable('currency', [
            'currency_id' => $this->primaryKey(),
            'name' => $this->string(255),
            'code' => $this->string(3)->notNull(),
            'format' => $this->string(16)->notNull()->defaultValue('%.02d'),
            'enabled' => $this->boolean()->notNull()->defaultValue(false),
            'priority' => $this->integer()->notNull()->defaultValue(0),
        ]);

        $this->createIndex('idx_currency_code', 'currency', ['code'], true);
        $this->createIndex('idx_currency_enabled', 'currency', ['enabled'], false);

        return true;
    }

    public function safeDown()
    {
        $this->dropTable('currency');

        return true;
    }
}
