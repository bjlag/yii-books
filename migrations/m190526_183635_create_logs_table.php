<?php

use yii\db\Migration;

/**
 * Handles the creation of table `logs`.
 */
class m190526_183635_create_logs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logs}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->notNull(),
            'module' => $this->string()->notNull(),
            'message' => $this->string()->notNull(),
            'created_at' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{$logs}}');
    }
}
