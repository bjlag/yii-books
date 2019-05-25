<?php

use yii\db\Migration;

/**
 * Class m181106_075421_table_user
 */
class m181106_075421_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'name' =>  $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'access_token'=> $this->string()->defaultValue(null),
            'auth_key' => $this->string()->defaultValue(null),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
