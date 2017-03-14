<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $type_account
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $Typeaccount
 *
 * @property BooksReserved[] $booksReserveds
 * @property FichierAdmin[] $fichierAdmins
 * @property Restaurant[] $restaurants
 * @property Chat[] $chats
 * @property Chat[] $chats0
 * @property Eleve[] $eleves
 * @property Evenement[] $evenements
 * @property Parent[] $parents
 * @property Professeur[] $professeurs
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_account', 'username', 'auth_key', 'password_hash', 'created_at', 'updated_at', 'Typeaccount'], 'required'],
            [['type_account', 'status', 'created_at', 'updated_at', 'Typeaccount'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_account' => 'Type Account',
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'Typeaccount' => 'Typeaccount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooksReserveds()
    {
        return $this->hasMany(BooksReserved::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFichierAdmins()
    {
        return $this->hasMany(FichierAdmin::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurants()
    {
        return $this->hasMany(Restaurant::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['User_idreciever' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats0()
    {
        return $this->hasMany(Chat::className(), ['User_idsender' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEleves()
    {
        return $this->hasMany(Eleve::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvenements()
    {
        return $this->hasMany(Evenement::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParents()
    {
        return $this->hasMany(Parent::className(), ['User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesseurs()
    {
        return $this->hasMany(Professeur::className(), ['User_id' => 'id']);
    }
}
