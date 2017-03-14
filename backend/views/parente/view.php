<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Parente */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parente-view">
    <p>
        <?= Html::a('Update', ['modifier', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['supprimer', 'id' => $model->id], [
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
            'username',
            'name',
            'adresse',
            'ncin',
            'numphone',
            'User_id',
        ],
    ]) ?>

</div>
