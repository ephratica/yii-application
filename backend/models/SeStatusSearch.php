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
            [['Date'], 'safe'],
            [['NATURAL_GAS', 'GOLD', 'WTI_CRUDE', 'BRENT_CRUDE', 'SOYBEANS', 'CORN', 'COPPER', 'SILVER', 'LOW_SULPHUR_GAS_OIL', 'LIVE_CATTLE', 'SOYBEAN_OIL', 'ALUMINIUM', 'SOYBEAN_MEAL', 'ZINC', 'ULS_DIESEL', 'NICKEL', 'WHEAT', 'SUGAR', 'GASOLINE', 'COFFEE', 'LEAN_HOGS', 'HRW_WHEAT', 'COTTON'], 'number'],
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
            'Date' => $this->Date,
            'NATURAL_GAS' => $this->NATURAL_GAS,
            'GOLD' => $this->GOLD,
            'WTI_CRUDE' => $this->WTI_CRUDE,
            'BRENT_CRUDE' => $this->BRENT_CRUDE,
            'SOYBEANS' => $this->SOYBEANS,
            'CORN' => $this->CORN,
            'COPPER' => $this->COPPER,
            'SILVER' => $this->SILVER,
            'LOW_SULPHUR_GAS_OIL' => $this->LOW_SULPHUR_GAS_OIL,
            'LIVE_CATTLE' => $this->LIVE_CATTLE,
            'SOYBEAN_OIL' => $this->SOYBEAN_OIL,
            'ALUMINIUM' => $this->ALUMINIUM,
            'SOYBEAN_MEAL' => $this->SOYBEAN_MEAL,
            'ZINC' => $this->ZINC,
            'ULS_DIESEL' => $this->ULS_DIESEL,
            'NICKEL' => $this->NICKEL,
            'WHEAT' => $this->WHEAT,
            'SUGAR' => $this->SUGAR,
            'GASOLINE' => $this->GASOLINE,
            'COFFEE' => $this->COFFEE,
            'LEAN_HOGS' => $this->LEAN_HOGS,
            'HRW_WHEAT' => $this->HRW_WHEAT,
            'COTTON' => $this->COTTON,
        ]);

        return $dataProvider;
    }

    public function searchMetal()
    {
        $query = SeStatus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('Date, GOLD, COPPER, SILVER, ALUMINIUM, ZINC, NICKEL')
            ->orderBy('Date ASC');

        return $dataProvider;
    }

    public function searchEnergy()
    {
        $query = SeStatus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('Date, NATURAL_GAS, WTI_CRUDE, BRENT_CRUDE, LOW_SULPHUR_GAS_OIL,
            SOYBEAN_OIL, ULS_DIESEL, GASOLINE')
            ->orderBy('Date ASC');

        return $dataProvider;
    }

    public function searchCrop()
    {
        $query = SeStatus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('Date, SOYBEANS, CORN, WHEAT, HRW_WHEAT, COTTON')
            ->orderBy('Date ASC');

        return $dataProvider;
    }

    public function searchFood()
    {
        $query = SeStatus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('Date, LIVE_CATTLE, SOYBEAN_MEAL, SUGAR, COFFEE, LEAN_HOGS')
            ->orderBy('Date ASC');

        return $dataProvider;
    }
}
