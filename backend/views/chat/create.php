<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Chat */

$this->title = 'Create Chat';
$this->params['breadcrumbs'][] = ['label' => 'Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chat-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
