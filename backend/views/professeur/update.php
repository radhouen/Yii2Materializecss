<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Professeur */

$this->title = 'modifier Professeur: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Professeurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="professeur-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
