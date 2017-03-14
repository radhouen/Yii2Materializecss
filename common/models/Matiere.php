<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "matiere".
 *
 * @property integer $id
 * @property string $titre
 * @property string $description
 */
class Matiere extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matiere';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titre', 'description'], 'required'],
            [['description'], 'string'],
            [['titre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titre' => 'Titre',
            'description' => 'Description',
        ];
    }
}
