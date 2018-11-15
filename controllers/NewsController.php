<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.11.18
 * Time: 18:49
 */

namespace app\controllers;


use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}