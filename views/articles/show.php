<?php $this->title = $article->title ?>
<div class="content">
    <div class="container">
        <h3 class="text-center"><?php $article->title ?></h3>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 article-image">
                <img src="http://localhost/SportLife/web/images/news/<?= $article->img ?>" alt="">
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 article-text">
               <?= $article->description ?>
            </div>
        </div>
<!--        <div class="comment-form text-center">-->
<!--            <div class="col-md-12">-->
<!--                <div class="panel ">-->
<!--                    <div class="panel-body">-->
<!--                        <textarea class="form-control" rows="2" placeholder="Добавьте Ваш комментарий"></textarea>-->
<!--                        <div class="mar-top clearfix">-->
<!--                            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Добавить</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>