<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property integer $id
 * @property string $date
 * @property string $message
 * @property integer $User_idreciever
 * @property integer $User_idsender
 *
 * @property User $userIdreciever
 * @property User $userIdsender
 */
class Chat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'User_idreciever', 'User_idsender'], 'required'],
            [['id', 'User_idreciever', 'User_idsender'], 'integer'],
            [['date'], 'safe'],
            [['message'], 'string', 'max' => 45],
            [['User_idreciever'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['User_idreciever' => 'id']],
            [['User_idsender'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['User_idsender' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'message' => 'Message',
            'User_idreciever' => 'User Idreciever',
            'User_idsender' => 'User Idsender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIdreciever()
    {
        return $this->hasOne(User::className(), ['id' => 'User_idreciever']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIdsender()
    {
        return $this->hasOne(User::className(), ['id' => 'User_idsender']);
    }
}
