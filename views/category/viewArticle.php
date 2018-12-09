<?php
use yii\helpers\Url;

$this->title = 'Статьи';
?>

<div class="navbar categories navbar-expand-lg">
    <a href="#" class="navbar-brand">Категории</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-4">
            <?php foreach ($categories as $category): ?>
                <li class="nav-item">
                    <a href="<?= Url::to(['category/article-view', 'id' => $category->id]) ?>" class="nav-link"><?= $category->title ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="articles article-page">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article): ?>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img align="center" src="http://localhost/SportLife/web/images/news/<?= $article->img ?>" class="img-fluid" alt="post-photo">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?= $article->title ?></h4>
                            <p class="card-text">
                                <?= $article->description ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= \yii\helpers\Url::to(['articles/show', 'id' => $article->id]) ?>" class="card-link">Далее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>