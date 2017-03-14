<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\User;
use frontend\models\Emploi;
use yii\helpers\Json;
use common\models\Classe;
use common\models\Professeur;
use common\models\Eleve;
use yii\bootstrap\ActiveForm;
/**
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

      $classCount = Classe::find()->count();
      $ProfCount = Professeur::find()->count();
      $eleveCount = Eleve::find()->count();
      $listeprof = Professeur::find()->limit(3)->asArray()->all();
        return $this->render('index', [
                'classCount' => $classCount,
                'ProfCount' => $ProfCount,
                'eleveCount' => $eleveCount,
                'listeprof' => $listeprof,
            ]);
    }

    public function actionProfesseur()
    {
        return $this->render('professeur');
    }
    public function actionParent()
    {
        return $this->render('parent');
    }
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    
     public function actionLogin()
            {
            if (!Yii::$app->user->isGuest) {
            //return $this->goHome();
             $type= User::find()->where(['username' => Yii::$app->user->identity->username ])->one();
            if($type->Typeaccount==2)
            {
              return  $this->render('professeur');
              //return $this->goBack();
            }
            elseif ($type->Typeaccount==1) {
                # code...
                 return  $this->render('eleve',[
                'model' => Yii::$app->user->identity,
            ]);
            }
            elseif ($type->Typeaccount==3) {
                # code...
                return  $this->render('parent');
            }
            else {
            return $this->goHome();
        }}    
            $model = new LoginForm();
            if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()))
            {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($model);
            }
            if ($model->load(Yii::$app->request->post()) && $model->login())
            {
            $session = Yii::$app->session;
            $session->set('username', $_POST['LoginForm']['username']);
            $session->set('password', $_POST['LoginForm']['password']);
            //return $this->goHome();
            $type= User::find()->where(['username' => $model->username ])->one();
            if($type->Typeaccount==2)
            {
              return  $this->render('professeur');
              //return $this->goBack();
            }
            elseif ($type->Typeaccount==1) {
            Yii::$app->runAction('eleve/index', ['model' => $model]);  
                      }
            elseif ($type->Typeaccount==3) {
                # code...
                return  $this->render('parent');
            }
            else {
            return $this->render('login', [
                'model' => $model,
            ]);}
            }
            else
            {
            return $this->renderAjax( 'login', [ 'model' => $model ] );
            }
            return $this->renderAjax( 'login', [ 'model' => $model ] );
            }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    public function actionAjax($id)
        {
            $seance= Emploi::findOne($id);
            echo Json::encode($seance);
           
        }
}
