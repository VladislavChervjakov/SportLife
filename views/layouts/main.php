<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="navbar navbar-expand-lg">
    <?= Html::a('SportLife', ['../web'], ['class' => 'navbar-brand']) ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <li class="nav-item">
                <?= Html::a('О нас', ['site/about'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Новости', ['news/index'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Статьи', ['articles/index'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Обратная связь', ['site/contact'], ['class' => 'nav-link']) ?>
            </li>
        </ul>
    </div>
</div>
    <?= $content ?>
    <footer class="page-footer font-small cyan darken-3">
        <div class="container">

            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center text-center">
                        <a href="https://uk-ua.facebook.com/" class="fb-ic">
                            <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="https://twitter.com/?lang=uk" class="tw-ic">
                            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="https://plus.google.com/discover?hl=uk" class="gplus-ic">
                            <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="https://www.linkedin.com/" class="li-ic">
                            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="https://www.instagram.com/" class="ins-ic">
                            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Pinterest-->
                        <a href="https://www.pinterest.com/" class="pin-ic">
                            <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright</div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
