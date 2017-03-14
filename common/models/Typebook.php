<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "typebook".
 *
 * @property integer $idtypebook
 * @property string $typebook
 * @property string $matière
 *
 * @property Book[] $books
 */
class Typebook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typebook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typebook', 'matière'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtypebook' => 'Idtypebook',
            'typebook' => 'Type De Livre',
            'matière' => 'Matière',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['typebook_idtypebook' => 'idtypebook']);
    }
}
