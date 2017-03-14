<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "classe".
 *
 * @property integer $id
 * @property integer $niveau
 * @property string $groupe
 *
 * @property Eleve[] $eleves
 */
class Classe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['niveau'], 'integer'],
            [['groupe'], 'required'],
            [['groupe'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'niveau' => 'Niveau',
            'groupe' => 'Groupe',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEleves()
    {
        return $this->hasMany(Eleve::className(), ['classe_id' => 'id']);
    }
}
