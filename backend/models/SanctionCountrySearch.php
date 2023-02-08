<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SanctionCountry;

/**
 * SanctionCountrySearch represents the model behind the search form of `backend\models\SanctionCountry`.
 */
class SanctionCountrySearch extends SanctionCountry
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country'], 'safe'],
            [['since_2014', 'since_202202'], 'integer'],
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
        $query = SanctionCountry::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'since_2014' => $this->since_2014,
            'since_202202' => $this->since_202202,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
