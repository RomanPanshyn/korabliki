<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "footerseo".
 *
 * @property int $id
 * @property string $text
 */
class Footerseo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'footerseo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'text'], 'required'],
            [['id'], 'integer'],
            [['text'], 'string'],
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
            'text' => 'Text',
        ];
    }
}
