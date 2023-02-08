<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UkraineCivilianCasualties;

/**
 * UkraineCivilianCasualtiesSearch represents the model behind the search form of `backend\models\UkraineCivilianCasualties`.
 */
class UkraineCivilianCasualtiesSearch extends UkraineCivilianCasualties
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Killed_Injured'], 'safe'],
            [['Total', 'Children'], 'integer'],
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
        $query = UkraineCivilianCasualties::find();

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
            'Total' => $this->Total,
            'Children' => $this->Children,
        ]);

        $query->andFilterWhere(['like', 'Killed_Injured', $this->Killed_Injured]);

        return $dataProvider;
    }
}
