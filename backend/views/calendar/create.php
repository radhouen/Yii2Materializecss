<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Calendar */

$this->title = 'Create Event';
$this->params['breadcrumbs'][] = ['label' => 'Calendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
