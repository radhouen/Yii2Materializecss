<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Parente */

$this->title = 'modifier Parente: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parente-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
