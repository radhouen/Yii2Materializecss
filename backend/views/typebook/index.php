<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TypebookSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Typebooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typebook-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Typebook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtypebook',
            'typebook',
            'matière',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
