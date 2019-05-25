<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books`.
 */
class m190525_190508_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'image' => $this->string(),
            'pages' => $this->smallInteger()->notNull(),
            'isbn' => $this->string()->notNull(),
            'language_id' => $this->integer()->notNull(),
            'binding_id' => $this->integer()->notNull(),
            'weight' => $this->smallInteger()->notNull(),
        ]);

        $this->addForeignKey('{{%fk-books-language_id}}', '{{%books}}', 'language_id', '{{%languages}}', 'id', 'RESTRICT');
        $this->addForeignKey('{{%fk-books-binding_id}}', '{{%books}}', 'binding_id', '{{%bindings}}', 'id', 'RESTRICT');

        $this->createIndex('{{%idx-books-language_id}}', '{{%books}}', 'language_id');
        $this->createIndex('{{%idx-books-binding_id}}', '{{%books}}', 'binding_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
