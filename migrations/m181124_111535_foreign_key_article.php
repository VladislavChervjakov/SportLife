<?php

use yii\db\Migration;

/**
 * Class m181124_111535_foreign_key_article
 */
class m181124_111535_foreign_key_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('article_category_id', 'article', 'category_id',
            'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181124_111535_foreign_key_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181124_111535_foreign_key_article cannot be reverted.\n";

        return false;
    }
    */
}
