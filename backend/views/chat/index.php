<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->title = 'Chats';
$this->params['breadcrumbs'][] = $this->title;
foreach ($User as $tab) {
echo $tab['username'].'<br>';
}?>
<div class="chat-form">

    <?php $form = ActiveForm::begin(); ?>

    <? echo   $form->field($model, 'date', 
      ['options' => ['value'=> 'your value'] ])->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

    <? echo   $form->field($model, 'User_idsender', 
      ['options' => ['value'=> 'your value'] ])->hiddenInput()->label(false); ?>
    <? echo   $form->field($model, 'User_idreciever', 
      ['options' => ['value'=> 'your value'] ])->hiddenInput()->label(false); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>