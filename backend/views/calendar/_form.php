<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Calendar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calendar-form">

    <?php $form = ActiveForm::begin(); ?>

 <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'En',
    'dateFormat' => 'yyyy-MM-dd',
    'options'=>['style' => 'width:100%;'],
]) ?>
     
    <?= $form->field($model, 'val')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
