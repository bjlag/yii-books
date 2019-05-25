<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bindings`.
 */
class m190525_190304_create_bindings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bindings}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bindings}}');
    }
}
