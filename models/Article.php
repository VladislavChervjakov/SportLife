<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 24.11.18
 * Time: 12:48
 */

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName()
    {
        return 'article';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}