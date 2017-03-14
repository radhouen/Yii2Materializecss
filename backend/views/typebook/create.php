<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Typebook */

$this->title = 'Create Typebook';
$this->params['breadcrumbs'][] = ['label' => 'Typebooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typebook-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
