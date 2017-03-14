<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ExamanSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Liste des examens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examan-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('ajouter Examan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idprofesseur',
            'idclasse',
            'matiere',
            'duree',
            // 'date',
            // 'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
