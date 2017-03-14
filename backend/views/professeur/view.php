<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Professeur */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Professeurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professeur-view">
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
            'username',
            'name',
            'ncin',
           // 'password',
            'User_id',
        ],
    ]) ?>

</div>
