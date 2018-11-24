<?php

use yii\db\Migration;

/**
 * Class m181124_111501_foreign_key_news
 */
class m181124_111501_foreign_key_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('category_id', 'news', 'category_id',
            'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181124_111501_foreign_key_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181124_111501_foreign_key_news cannot be reverted.\n";

        return false;
    }
    */
}
