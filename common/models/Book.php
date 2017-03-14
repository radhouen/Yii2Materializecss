<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Book".
 *
 * @property integer $id
 * @property string $auteur
 * @property integer $typebook_idtypebook
 *
 * @property Typebook $typebookIdtypebook
 * @property BooksReserved[] $booksReserveds
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typebook_idtypebook'], 'required'],
            [['typebook_idtypebook'], 'integer'],
            [['auteur'], 'string', 'max' => 45],
            [['typebook_idtypebook'], 'exist', 'skipOnError' => true, 'targetClass' => Typebook::className(), 'targetAttribute' => ['typebook_idtypebook' => 'idtypebook']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'auteur' => 'Auteur',
            'typebook_idtypebook' => 'Type de livre(1:cours,2:exercice,3:correction)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypebookIdtypebook()
    {
        return $this->hasOne(Typebook::className(), ['idtypebook' => 'typebook_idtypebook']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooksReserveds()
    {
        return $this->hasMany(BooksReserved::className(), ['Book_id' => 'id']);
    }
}
