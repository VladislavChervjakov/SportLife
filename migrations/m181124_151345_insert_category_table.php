<?php

use yii\db\Migration;

/**
 * Class m181124_151345_insert_category_table
 */
class m181124_151345_insert_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('category', ['title'], [
            ['Футбол'],
            ['Хоккей'],
            ['ММА']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181124_151345_insert_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181124_151345_insert_category_table cannot be reverted.\n";

        return false;
    }
    */
}
