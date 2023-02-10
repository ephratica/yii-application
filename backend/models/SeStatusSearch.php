<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SeStatus;

/**
 * SeStatusSearch represents the model behind the search form of `backend\models\SeStatus`.
 */
class SeStatusSearch extends SeStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['natural_gas', 'gold', 'wti_crude', 'brent_crude', 'soybeans', 'corn', 'copper', 'silver', 'low_sulphur_gas_oil', 'live_cattle', 'soybean_oil', 'aluminium', 'soybean_meal', 'zinc', 'uls_diesel', 'nickel', 'wheat', 'sugar', 'gasoline', 'coffee', 'lean_hogs', 'hrw_wheat', 'cotton'], 'number'],
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
        $query = SeStatus::find();

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
            'natural_gas' => $this->natural_gas,
            'gold' => $this->gold,
            'wti_crude' => $this->wti_crude,
            'brent_crude' => $this->brent_crude,
            'soybeans' => $this->soybeans,
            'corn' => $this->corn,
            'copper' => $this->copper,
            'silver' => $this->silver,
            'low_sulphur_gas_oil' => $this->low_sulphur_gas_oil,
            'live_cattle' => $this->live_cattle,
            'soybean_oil' => $this->soybean_oil,
            'aluminium' => $this->aluminium,
            'soybean_meal' => $this->soybean_meal,
            'zinc' => $this->zinc,
            'uls_diesel' => $this->uls_diesel,
            'nickel' => $this->nickel,
            'wheat' => $this->wheat,
            'sugar' => $this->sugar,
            'gasoline' => $this->gasoline,
            'coffee' => $this->coffee,
            'lean_hogs' => $this->lean_hogs,
            'hrw_wheat' => $this->hrw_wheat,
            'cotton' => $this->cotton,
        ]);

        return $dataProvider;
    }
}
