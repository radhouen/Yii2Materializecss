<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parent".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $adresse
 * @property integer $ncin
 * @property string $numphone
 * @property integer $User_id
 *
 * @property Eleve[] $eleves
 * @property User $user
 */
class Parente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ncin', 'User_id'], 'integer'],
            [['User_id'], 'required'],
            [['username', 'name', 'adresse', 'numphone'], 'string', 'max' => 45],
            [['User_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['User_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Prénom',
            'name' => 'Nom',
            'adresse' => 'Adresse',
            'ncin' => 'Ncin',
            'numphone' => 'Numéro Télephone',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEleves()
    {
        return $this->hasMany(Eleve::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_id']);
    }
}
