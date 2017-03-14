<?php

use yii\helpers\Html;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = 'Create Book';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="book-create">

    <?= $this->render('_form', [
        'model' => $model,'upload'=>$upload
    ]) ?>
</div>
