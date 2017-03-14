<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'auteur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typebook_idtypebook')->textInput() ?>
    <?= $form->field($model, 'title')->textInput() ?>
  <?php  echo $form->field($upload, 'file')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ajouter' : 'modifier', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
