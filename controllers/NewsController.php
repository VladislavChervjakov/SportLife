<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.11.18
 * Time: 18:49
 */

namespace app\controllers;


use app\models\Category;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news = News::find()->all();
        $categories = Category::find()->all();
        return $this->render('index', compact('news', 'categories'));
    }

    public function actionShow($id)
    {
        $categories = Category::find()->all();
        $one = News::findOne($id);
        return $this->render('show', compact('one', 'categories'));
    }
}