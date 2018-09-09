<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $url
 * @property string $description
 * @property string $keywords
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'title', 'url', 'description', 'keywords'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['title', 'url', 'keywords'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'title' => 'Заголовок',
            'url' => 'URL',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
        ];
    }
}
