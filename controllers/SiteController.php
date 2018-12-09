<?php

namespace app\controllers;

use app\models\Article;
use app\models\Broadcast;
use app\models\News;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $articles = Article::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $news = News::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $broadcasts = Broadcast::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('index',compact('articles', 'news', 'broadcasts'));
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['site/contact']);
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
