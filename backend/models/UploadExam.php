<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
class UploadExam extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf'],
            [['file'], 'required']
        ];
    }
    
    public function upload($id)
    {
        if ($this->validate()) {
            $this->file->saveAs(Yii::getAlias('upload').'/'. $id.'.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}
?>
