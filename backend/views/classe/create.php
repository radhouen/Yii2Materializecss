<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Classe */

$this->title = 'Create Classe';
$this->params['breadcrumbs'][] = ['label' => 'Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
