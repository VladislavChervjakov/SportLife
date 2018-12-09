<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m181124_105835_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'img' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'category_id' => $this->integer()
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
