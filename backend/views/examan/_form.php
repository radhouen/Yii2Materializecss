<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\select2\Select2;
use dosamigos\datepicker\DateRangePicker;
use common\models\Professeur;
use yii\db\Query;
/* @var $this yii\web\View */
/* @var $model common\models\Examan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examan-form">
<?
$query = new Query;
$query->select('username')->from('professeur')->distinct();
$data = $query->all();
//---------------------------------
$query1 = new Query;
$query1->select('id')->from('classe');
$data1 = $query1->all();
//--------------------------------------
$query2 = new Query;
$query2->select('titre')->from('matiere');
$data2 = $query2->all();
?>
    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'idprofesseur')->widget(Select2::classname(), [
    'data' => $data,
    'language' => 'fr',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <?=  $form->field($model, 'idclasse')->widget(Select2::classname(), [
    'data' => $data1,
    'language' => 'fr',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>
 <?=  
    $form->field($model, 'matiere')->widget(Select2::classname(), [
    'data' => $data2,
    'language' => 'de',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>
    <?= $form->field($model, 'duree')->textInput() ?>

 <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'En',
    'dateFormat' => 'yyyy-MM-dd',
    'options'=>['style' => 'width:100%;'],
]) ?>  

<?php  echo $form->field($upload, 'file')->widget(FileInput::classname(), [
    'options' => ['accept' => 'pdf/*'],
]); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ajuter' : 'modifier', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
