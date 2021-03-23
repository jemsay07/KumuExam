<?php

namespace app\controllers;

use Yii;

use yii\web\Controller; 
use yii\web\BadRequestHttpException;
use frontend\models\HomeContactForm;

class HomePageController extends Controller
{
    /**
     * Displays homepage.
     */
    public function actionIndex(){
        return $this->render('homepage');
    }
}
