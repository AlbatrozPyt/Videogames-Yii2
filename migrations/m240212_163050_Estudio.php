<?php

use yii\db\Migration;

/**
 * Class m240212_163050_Estudio
 */
class m240212_163050_Estudio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Estudio', [
            'ID' => $this->primaryKey(),
            'Nome' => $this->string()->unique()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('Estudio');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240212_163050_Estudio cannot be reverted.\n";

        return false;
    }
    */
}
