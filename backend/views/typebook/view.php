<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Typebook */

$this->title = $model->idtypebook;
$this->params['breadcrumbs'][] = ['label' => 'Typebooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typebook-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idtypebook], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idtypebook], [
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
            'idtypebook',
            'typebook',
            'matière',
        ],
    ]) ?>

</div>
