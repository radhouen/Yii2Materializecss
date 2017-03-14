<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "eleve".
 *
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $username
 * @property string $datenaissance
 * @property integer $User_id
 * @property integer $classe_id
 * @property integer $parent_id
 *
 * @property Abscence[] $abscences
 * @property Note[] $notes
 * @property User $user
 * @property Classe $classe
 * @property Parent $parent
 */
class Eleve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eleve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datenaissance'], 'safe'],
            [['User_id', 'classe_id', 'parent_id'], 'required'],
            [['User_id', 'classe_id', 'parent_id'], 'integer'],
            [['nom', 'prenom', 'username'], 'string', 'max' => 45],
            [['User_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['User_id' => 'id']],
            [['classe_id'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['classe_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parent::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nom',
            'prenom' => 'Prénom',
            'username' => 'Username',
            'datenaissance' => 'Datenaissance',
            'User_id' => 'User ID',
            'classe_id' => 'Classe ID',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbscences()
    {
        return $this->hasMany(Abscence::className(), ['élève_idélève' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotes()
    {
        return $this->hasMany(Note::className(), ['élève_idélève' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasse()
    {
        return $this->hasOne(Classe::className(), ['id' => 'classe_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Parent::className(), ['id' => 'parent_id']);
    }
}
