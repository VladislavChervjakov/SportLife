<?php $this->title = $one->title ?>
<div class="content">
    <div class="container">
        <h3 class="text-center"><?php $one->title ?></h3>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 article-image">
                <img src="http://localhost/SportLife/web/images/news/<?= $one->img ?>" alt="">
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 article-text">
                <?= $one->description ?>
            </div>
        </div>
    </div>
</div>