<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Professeur */

$this->title = 'ajouter Professeur';
$this->params['breadcrumbs'][] = ['label' => 'Professeurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professeur-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
