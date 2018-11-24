<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 24.11.18
 * Time: 13:27
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getNews()
    {
        return $this->hasMany(News::className(), ['category_id' => 'id']);
    }

    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }
}