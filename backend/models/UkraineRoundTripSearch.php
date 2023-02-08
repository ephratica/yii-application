<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UkraineRoundTrip;

/**
 * UkraineRoundTripSearch represents the model behind the search form of `backend\models\UkraineRoundTrip`.
 */
class UkraineRoundTripSearch extends UkraineRoundTrip
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type'], 'safe'],
            [['Num'], 'integer'],
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
        $query = UkraineRoundTrip::find();

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
            'Num' => $this->Num,
        ]);

        $query->andFilterWhere(['like', 'Type', $this->Type]);

        return $dataProvider;
    }
}
