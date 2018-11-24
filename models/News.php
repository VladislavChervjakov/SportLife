<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 24.11.18
 * Time: 12:48
 */

namespace app\models;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}