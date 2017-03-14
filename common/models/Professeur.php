<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "professeur".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property integer $ncin
 * @property string $password
 * @property integer $User_id
 *
 * @property Abscence[] $abscences
 * @property Note[] $notes
 * @property User $user
 */
class Professeur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professeur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'User_id'], 'required'],
            [['id', 'ncin', 'User_id'], 'integer'],
            [['username', 'name', 'password'], 'string', 'max' => 45],
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
            'ncin' => 'Ncin',
            'password' => 'Mot De Passe',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbscences()
    {
        return $this->hasMany(Abscence::className(), ['professeur_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotes()
    {
        return $this->hasMany(Note::className(), ['professeur_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_id']);
    }
}
