<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $datetime
 * @property string $comments
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'datetime'], 'required'],
            [['datetime'], 'safe'],
            [['comments'], 'string'],
            [['name'], 'string', 'max' => 80],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'datetime' => 'Дата и время',
            'comments' => 'Комментарии',
        ];
    }
}
