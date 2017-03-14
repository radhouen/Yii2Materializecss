<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Parente */

$this->title = 'ajouter Parente';
$this->params['breadcrumbs'][] = ['label' => 'Parentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parente-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
