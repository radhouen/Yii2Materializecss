<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property string $First_name
 * @property string $last_name
 * @property string $e_mail
 * @property string $tel_num
 * @property string $username
 * @property string $adress
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tel_num', 'username'], 'required'],
            [['First_name', 'last_name', 'e_mail', 'username', 'adress'], 'string', 'max' => 255],
            [['tel_num'], 'string', 'max' => 20],
            [['tel_num'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'First_name' => 'Prénom',
            'last_name' => 'Nom',
            'e_mail' => 'E Mail',
            'tel_num' => 'Numéro De Télephone',
            'username' => 'Username',
            'adress' => 'Adresse',
        ];
    }
}
