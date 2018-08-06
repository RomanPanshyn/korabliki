<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book1;
use yii\data\Pagination;

/**
 * ShopSearch represents the model behind the search form of `app\models\Content`.
 */
class Book1Search extends Book1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ship', 'route', 'event', 'guests', 'name', 'phone', 'datefrom', 'dateto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function search($params)
    {
        $query = Book1::find();

        // add conditions that should always apply here

        $pagination = new Pagination(['pageSize' => 5]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => $pagination,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);
        $query->andFilterWhere(['like', 'ship', $this->ship])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'guests', $this->guests])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'datefrom', $this->datefrom])
            ->andFilterWhere(['like', 'dateto', $this->dateto]);

        return $dataProvider;
    }
}
