<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "broadcast".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $href
 */
class Broadcast extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'broadcast';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'href'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'href' => 'Href',
        ];
    }
}
