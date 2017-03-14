<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Calendar */

$this->title = 'Update Calendar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Calendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calendar-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
