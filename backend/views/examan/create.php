<?php

use yii\helpers\Html;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Examan */

$this->title = 'ajouter Examan';
$this->params['breadcrumbs'][] = ['label' => 'Examen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examan-create">
    <?= $this->render('_form', [
        'model' => $model,'upload'=>$upload
    ]) ?>

</div>
