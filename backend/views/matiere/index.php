<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Model;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MatiereSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matieres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matiere-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matiere', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'export'=>false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'class'=>'kartik\grid\EditableColumn',
            'header'=>'BRANCH',
            'attribute'=>'titre',
            'value'=>function($model){
                return $model->titre;
            }
            ],
            'id',
            'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
