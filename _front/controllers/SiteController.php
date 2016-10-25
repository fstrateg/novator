<?php

namespace _front\controllers;

use Yii;

use yii\web\Controller;
use _front\models\content;

class SiteController extends Controller
{
   /* public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    /*[
                        'allow' => true,
                        'actions'=>['logout','contact','dieselads','createfields','save','cancel','getad'],
                        'roles' =>['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['login','contact','index'],
                        'roles' => ['?'],
                    ],
                    /*[
                        'allow' => false,
                        'roles' => ['?'],
                    ],

                ],
            ],
        ];
    }*/

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

    public function actionIndex()
    {
        $model=new Content();
        $article=$model->findOne(['alias'=>'home']);
        return $this->render('index',['article'=>$article]);
    }

    private function showContentByArticle($alias)
    {
        $model=new Content();
        $article=$model->findOne(['alias'=>$alias]);
        return $this->render('article',['article'=>$article]);
    }

    public function actionOutdooradv()
    {
        return $this->showContentByArticle('outdoor-adv');
    }

    public function actionContact()
    {
        return $this->showContentByArticle('contact');
    }

    public function actionInterior()
    {
        return $this->showContentByArticle('interior');
    }
}
