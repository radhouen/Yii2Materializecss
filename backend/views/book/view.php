<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-view">


    <p>
        <?= Html::a('modifier', ['update', 'id' => $model->id], ['class' => 'btn btn-primary fa fa-refresh']) ?>
        <?= Html::a('Télécharger', ['download', 'id' => $model->id], ['class' => 'btn btn-primary fa fa-download']) ?>
        <?= Html::a('supprimer', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger fa fa-trash-o',
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
            'auteur',
            'typebook_idtypebook',
            'title',
         [
         'attribute'=>'file',
        'value'=>('upload/' . $model->id.'.png'),
        'format' => ['image',['width'=>'100%','height'=>'50%']],
                    ]

  
        ],
    ]) ?>

</div>
