<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Restaurant".
 *
 * @property integer $id
 * @property string $Type
 * @property double $Prix
 * @property integer $User_id
 *
 * @property User $user
 */
class Restaurant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Restaurant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'User_id'], 'required'],
            [['id', 'User_id'], 'integer'],
            [['Prix'], 'number'],
            [['Type'], 'string', 'max' => 45],
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
            'Type' => 'Type',
            'Prix' => 'Prix',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_id']);
    }
}
