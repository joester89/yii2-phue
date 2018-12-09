<?php

namespace joester89\yii2\phue\migrations;

use yii\db\Migration;

/**
 * Class M181209140024CreateLightTable
 */
class M181209140024CreateLightTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%light}}', [
            'id' => $this->primaryKey(),
            'source_id' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
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
        $this->dropTable('{{%light}}');
    }
}
