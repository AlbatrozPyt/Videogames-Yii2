<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudio".
 *
 * @property int $ID
 * @property string $Nome
 *
 * @property Jogo[] $jogos
 */
class Estudio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estudio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required', 'message' => 'O nome do estudio não pode estar vazio!!!'],
            [['Nome'], 'string', 'max' => 255],
            [['Nome'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Jogos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogos()
    {
        return $this->hasMany(Jogo::class, ['Estudio_ID' => 'ID']);
    }
}
