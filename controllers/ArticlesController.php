<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.11.18
 * Time: 19:01
 */

namespace app\controllers;


use yii\web\Controller;

class ArticlesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}