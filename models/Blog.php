<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $datetimeblog
 * @property string $titleblog
 * @property string $textblog
 * @property string $datetimearticle
 * @property string $titlearticle
 * @property string $textarticle
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'datetimeblog', 'titleblog', 'textblog', 'datetimearticle', 'titlearticle', 'textarticle'], 'required'],
            [['id'], 'integer'],
            [['titleblog', 'textblog', 'titlearticle', 'textarticle'], 'string'],
            [['datetimeblog', 'datetimearticle'], 'string', 'max' => 50],
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
            'datetimeblog' => 'Дата и время блога',
            'titleblog' => 'Заголовок блога',
            'textblog' => 'Текст блога',
            'datetimearticle' => 'Дата и время статьи',
            'titlearticle' => 'Заголовок статьи',
            'textarticle' => 'Текст статьи',
        ];
    }
}
