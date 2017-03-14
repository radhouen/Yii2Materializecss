<?php
namespace backend\controllers;

use yii\rest\ActiveController;
use Yii;
use common\models\Event;
use common\models\EventSearchModel;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class UserController extends ActiveController
{
    public $modelClass = 'common\models\Event';
}