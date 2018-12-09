<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 09.12.18
 * Time: 16:12
 */

namespace app\controllers;


use app\models\Article;
use app\models\Category;
use app\models\News;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionArticleView($id)
    {
        $categories = Category::find()->all();
        $articles = Article::find()->where(['category_id' => $id])->all();

        return $this->render('viewArticle', compact('articles', 'categories'));
    }

    public function actionNewsView($id)
    {
        $categories = Category::find()->all();
        $news = News::find()->where(['category_id' => $id])->all();

        return $this->render('viewNews', compact('news', 'categories'));
    }

}