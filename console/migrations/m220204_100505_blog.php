<?php

use yii\db\Migration;

/**
 * Class m220204_100505_blog
 */
class m220204_100505_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220204_100505_blog cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'textNews' => $this->text(),
            'imgNews' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m220204_100505_blog cannot be reverted.\n";

        return false;
    }

}
