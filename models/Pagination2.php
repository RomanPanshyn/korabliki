<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagination".
 *
 * @property int $id
 * @property string $name
 * @property int $pagesize
 */
class Pagination2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'pagesize'], 'required'],
            [['id', 'pagesize'], 'integer'],
            [['name'], 'string', 'max' => 100],
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
            'name' => 'Name',
            'pagesize' => 'Количество строк',
        ];
    }
}
