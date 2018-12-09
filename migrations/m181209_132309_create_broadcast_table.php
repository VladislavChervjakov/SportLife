<?php

use yii\db\Migration;

/**
 * Handles the creation of table `broadcast`.
 */
class m181209_132309_create_broadcast_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('broadcast', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'img' => $this->string(),
            'href' => $this->string()
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('broadcast');
    }
}
