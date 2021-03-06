<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Sport Life';
?>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="images/sport1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/sport2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/sport3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/sport4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<div class="articles">
    <div class="container">
        <h3 class="text-center"><img src="images/icons/icon3.png" alt="">Статьи</h3>
        <div class="row">
            <?php foreach ($articles as $article): ?>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img align="center" src="images/news/<?= $article->img ?>" class="img-fluid" alt="post-photo">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $article->title ?></h4>
                        <p class="card-text">
                            <?= $article->description ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <?= Html::a('Далее', ["articles/show/$article->id"], ['class' => 'card-link']) ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <h3 class="text-center"><a href="<?= Url::to(['articles/index']) ?>">Больше статей</a></h3>
    </div>
</div>
<div class="news">
    <div class="container">
        <h3 class="text-center"><img src="images/icons/icon2.png" alt="">Новости</h3>
        <div class="row">
            <?php foreach ($news as $one): ?>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img align="center" src="images/news/<?= $one->img ?>" class="img-fluid" alt="post-photo">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $one->title ?></h4>
                        <p class="card-text">
                            <?= $one->description ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= \yii\helpers\Url::to(['news/show', 'id' => $one->id]) ?>" class="card-link">Далее</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <h3 class="text-center"><a href="<?= Url::to(['news/index']) ?>">Больше новостей</a></h3>
    </div>
</div>
<div class="broadcasts">
    <div class="container">
        <h3 class="text-center"><img src="images/icons/icon1.png" alt="">Трансляции</h3>
        <div class="row">
            <?php foreach ($broadcasts as $broadcast): ?>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <a href="<?= $broadcast->href ?>"><img align="center" src="images/stream/<?= $broadcast->img ?>" class="img-fluid" alt="post-photo"></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>