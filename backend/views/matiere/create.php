<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Matiere */

$this->title = 'Create Matiere';
$this->params['breadcrumbs'][] = ['label' => 'Matieres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matiere-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
