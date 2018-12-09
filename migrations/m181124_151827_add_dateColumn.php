<?php

use yii\db\Migration;

/**
 * Class m181124_151827_add_dateColumn
 */
class m181124_151827_add_dateColumn extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news', 'created', 'DATE');
        $this->addColumn('article', 'created', 'DATE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181124_151827_add_dateColumn cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181124_151827_add_dateColumn cannot be reverted.\n";

        return false;
    }
    */
}
