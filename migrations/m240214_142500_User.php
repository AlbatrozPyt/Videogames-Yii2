<?php

use yii\db\Migration;

/**
 * Class m240214_142500_User
 */
class m240214_142500_User extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('User', [
            'ID' => $this->primaryKey(),
            'Email' => $this->string()->unique()->notNull(),
            'Senha' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('User');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240214_142500_User cannot be reverted.\n";

        return false;
    }
    */
}
