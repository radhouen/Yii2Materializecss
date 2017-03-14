<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "emploi".
 *
 * @property integer $jour
 * @property string $seance
 * @property integer $idmatiere
 * @property integer $idprofesseur
 * @property integer $idclasse
 */
class Emploi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emploi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jour', 'seance', 'idmatiere', 'idprofesseur', 'idclasse'], 'required'],
            [['jour', 'idmatiere', 'idprofesseur', 'idclasse'], 'integer'],
            [['seance'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jour' => 'Jour',
            'seance' => 'Seance',
            'idmatiere' => 'Idmatiere',
            'idprofesseur' => 'Idprofesseur',
            'idclasse' => 'Idclasse',
        ];
    }
}
