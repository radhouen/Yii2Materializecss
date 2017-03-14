<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfesseurSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Professeurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professeur-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('ajouter Professeur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'name',
            'ncin',
            //'password',
            // 'User_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
