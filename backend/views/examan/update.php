<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Examan */

$this->title = 'modifier Examan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Examen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="examan-update">
    <?= $this->render('_form', [
        'model' => $model,'upload'=>$upload
    ]) ?>

</div>
