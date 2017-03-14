<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CalendarSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'liste des évènement';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Calendar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'val',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
