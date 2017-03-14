<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Examan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Examen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examan-view">
    <p>
        <?= Html::a('modifier', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('supprimer', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'idprofesseur',
            'idclasse',
            'matiere',
            'duree',
            'date',
            'type',
        ],
    ]) ?>

</div>
