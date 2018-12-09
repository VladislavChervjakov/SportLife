<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15.11.18
 * Time: 19:01
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Category;
use app\models\Article;

class ArticlesController extends Controller
{
    public function actionIndex()
    {
        $articles = Article::find()->all();

        return $this->render('index',compact('articles'));
    }


    public function  actionShow($id)
    {
        $article = Article::findOne($id);

        return $this->render('show', compact('article'));
    }
}