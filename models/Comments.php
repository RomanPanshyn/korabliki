<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $datetime
 * @property string $name
 * @property string $email
 * @property string $comment
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime', 'name', 'email', 'comment'], 'required'],
            [['comment'], 'string'],
            [['datetime'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 70],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime' => 'Дата и время',
            'name' => 'Имя',
            'email' => 'E-mail',
            'comment' => 'Комментарий',
        ];
    }
}
