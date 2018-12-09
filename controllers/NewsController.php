<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.11.18
 * Time: 18:49
 */

namespace app\controllers;


use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news = News::find()->all();
        return $this->render('index', compact('news'));
    }

    public function actionShow($id)
    {
        $one = News::findOne($id);
        return $this->render('show', compact('one'));
    }
}