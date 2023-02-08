<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Aid;

/**
 * AidSearch represents the model behind the search form of `backend\models\Aid`.
 */
class AidSearch extends Aid
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country', 'date', 'type'], 'safe'],
            [['value'], 'integer'],
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
        $query = Aid::find();

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
            'date' => $this->date,
            'value' => $this->value,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }

    public function searchCountry()
    {
        $query = Aid::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('country, sum(value) as value')
            ->groupBy('country')
            ->orderBy('country ASC');

        return $dataProvider;
    }

    public function searchDate()
    {
        $query = Aid::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('date, sum(value) as value')
            ->groupBy('date')
            ->orderBy('date ASC');

        return $dataProvider;
    }

    public function searchType()
    {
        $query = Aid::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('type, sum(value) as value')
            ->groupBy('type')
            ->orderBy('type ASC');

        return $dataProvider;
    }
}
