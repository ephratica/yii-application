<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MilitaryCompareTotal;

/**
 * MilitaryCompareTotalSearch represents the model behind the search form of `backend\models\MilitaryCompareTotal`.
 */
class MilitaryCompareTotalSearch extends MilitaryCompareTotal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type'], 'safe'],
            [['Active_military_personnel', 'Aircraft', 'Armored_vehicles', 'Naval_fleet', 'Nuclear_warheads'], 'integer'],
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
        $query = MilitaryCompareTotal::find();

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
            'Active_military_personnel' => $this->Active_military_personnel,
            'Aircraft' => $this->Aircraft,
            'Armored_vehicles' => $this->Armored_vehicles,
            'Naval_fleet' => $this->Naval_fleet,
            'Nuclear_warheads' => $this->Nuclear_warheads,
        ]);

        $query->andFilterWhere(['like', 'Type', $this->Type]);

        return $dataProvider;
    }
}
