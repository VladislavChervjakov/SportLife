<?php
use yii\helpers\Url;

$this->title = 'Новости';
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
            <?php foreach ($news as $one): ?>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img align="center" src="http://localhost/SportLife/web/images/news/<?= $one->img ?>" class="img-fluid" alt="post-photo">
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
    </div>
</div>