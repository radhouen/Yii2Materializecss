<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Examan".
 *
 * @property integer $id
 * @property string $idprofesseur
 * @property string $idclasse
 * @property string $matiere
 * @property double $duree
 * @property string $date
 */
class Examan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Examan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofesseur', 'idclasse', 'matiere', 'duree', 'date'], 'required'],
            [['duree'], 'number'],
            [['date'], 'safe'],
            [['idprofesseur', 'matiere'], 'string', 'max' => 45],
            [['idclasse'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idprofesseur' => 'Idprofesseur',
            'idclasse' => 'Idclasse',
            'matiere' => 'Matiere',
            'duree' => 'Duree',
            'date' => 'Date',
        ];
    }
}
