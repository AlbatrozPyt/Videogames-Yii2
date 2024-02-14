<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $ID
 * @property string $Email
 * @property string $Senha
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Email', 'Senha'], 'required'],
            [['Email', 'Senha'], 'string', 'max' => 255],
            [['Email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Email' => 'Email',
            'Senha' => 'Senha',
        ];
    }

    public static function findIdentity($id) {
        return self::findOne(["ID" => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null) {

    }

    public function getId() {
        return $this->ID;
    }

    public function getAuthKey() {

    }

    public function validateAuthKey($authKey) {

    }

    public function validatePassword($password) {
        return $this->Senha === $password;
    }

    public static function findByEmail($email) {
        return self::findOne(["Email" => $email]);
    }
}
