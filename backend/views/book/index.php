<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BookSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Livres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('ajouter Livre', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'auteur',
            'typebook_idtypebook',
            'title',
            'file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php Pjax::end(); ?>