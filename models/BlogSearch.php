<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blog;
use yii\data\Pagination;

/**
 * ShopSearch represents the model behind the search form of `app\models\Content`.
 */
class BlogSearch extends Blog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['datetimeblog', 'titleblog', 'textblog', 'datetimearticle', 'titlearticle', 'textarticle',
                'title', 'url', 'description', 'keywords'], 'safe'],
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
        $query = Blog::find();

        // add conditions that should always apply here

        $pagination = new Pagination(['pageSize' => 6]);
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

        $query->andFilterWhere(['like', 'datetimeblog', $this->datetimeblog])
            ->andFilterWhere(['like', 'titleblog', $this->titleblog])
            ->andFilterWhere(['like', 'textblog', $this->textblog])
            ->andFilterWhere(['like', 'datetimearticle', $this->datetimearticle])
            ->andFilterWhere(['like', 'titlearticle', $this->titlearticle])
            ->andFilterWhere(['like', 'textarticle', $this->textarticle])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords]);

        return $dataProvider;
    }
}
