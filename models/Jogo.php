<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogo".
 *
 * @property int $ID
 * @property string $Nome
 * @property string $Lancamento
 * @property int|null $Estudio_ID
 *
 * @property Estudio $estudio
 */
class Jogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Lancamento'], 'required'],
            [['Estudio_ID'], 'integer'],
            [['Nome'], 'string', 'max' => 255],
            [['Lancamento'], 'string', 'max' => 10],
            [['Nome'], 'unique'],
            [['Estudio_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Estudio::class, 'targetAttribute' => ['Estudio_ID' => 'ID']],
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
            'Lancamento' => 'Lançamento',
            'Estudio_ID' => 'Estudio',
        ];
    }

    /**
     * Gets query for [[Estudio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::class, ['ID' => 'Estudio_ID']);
    }
}
