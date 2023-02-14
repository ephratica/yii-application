<?php

/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is represents the model behind the search form of `backend\models\AllCountries`.
*/

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AllCountries;

class AllCountriesSearch extends AllCountries
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'code'], 'safe'],
            [['gdp', 'total_cost_in_billion_euros'], 'number'],
            [['sanction', 'aid', 'number_of_refugees'], 'integer'],
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
        $query = AllCountries::find();

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
            'gdp' => $this->gdp,
            'sanction' => $this->sanction,
            'aid' => $this->aid,
            'total_cost_in_billion_euros' => $this->total_cost_in_billion_euros,
            'number_of_refugees' => $this->number_of_refugees,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
