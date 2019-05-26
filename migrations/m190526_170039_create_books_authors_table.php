<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books_authors`.
 */
class m190526_170039_create_books_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books_authors}}', [
            'book_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('{{%fk-books_authors-book_id}}', '{{%books_authors}}', 'book_id', '{{%books}}', 'id', 'RESTRICT');
        $this->addForeignKey('{{%fk-books_authors-binding_id}}', '{{%books_authors}}', 'author_id', '{{%authors}}', 'id', 'RESTRICT');

        $this->createIndex('{{%idx-books_authors-book_id}}', '{{%books_authors}}', 'book_id');
        $this->createIndex('{{%idx-books_authors-author_id}}', '{{%books_authors}}', 'author_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books_authors}}');
    }
}
