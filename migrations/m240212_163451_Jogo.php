<?php

use yii\db\Migration;

/**
 * Class m240212_163451_Jogo
 */
class m240212_163451_Jogo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Jogo', [
            "ID" => $this->primaryKey(),
            "Nome" => $this->string()->unique()->notNull(),
            "Lancamento" => $this->string(10)->notNull(),
            "Estudio_ID" => $this->integer()
        ]);
        $this->addForeignKey("fk_estudio", "Jogo", "Estudio_ID", "Estudio", "ID", "RESTRICT");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("fk_estudio", "Jogo");
        $this->dropTable("Jogo");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240212_163451_Jogo cannot be reverted.\n";

        return false;
    }
    */
}
