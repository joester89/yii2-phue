<?php

namespace joester89\yii2\phue\migrations;

use yii\db\Migration;

/**
 * Class M181209140023CreateBridgeTable
 */
class M181209140023CreateBridgeTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bridge}}', [
            'id' => $this->primaryKey(),
            'source_id' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'ip_address' => $this->string()->notNull(),
            'username' => $this->string(),
            'status' => $this->integer()->notNull(),
            'created_at' => $this->string()->notNull(),
            'updated_at' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bridge}}');
    }
}
