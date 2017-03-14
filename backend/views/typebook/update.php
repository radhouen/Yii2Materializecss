<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Typebook */

$this->title = 'Update Typebook: ' . $model->idtypebook;
$this->params['breadcrumbs'][] = ['label' => 'Typebooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtypebook, 'url' => ['view', 'id' => $model->idtypebook]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="typebook-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
