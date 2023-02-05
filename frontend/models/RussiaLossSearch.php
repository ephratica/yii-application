<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RussiaLoss;

/**
 * RussiaLossSearch represents the model behind the search form of `frontend\models\RussiaLoss`.
 */
class RussiaLossSearch extends RussiaLoss
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['tank', 'bbm', 'artillery', 'multi_barrel_rocket_launcher', 'air_defense_system', 'fixed_wing_aircraft', 'helicopter', 'uav', 'cruise_missile', 'ships', 'automobile_and_oil_tanker', 'special_equipment', 'personnel_total', 'personnel_increase'], 'integer'],
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
        $query = RussiaLoss::find();

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
            'tank' => $this->tank,
            'bbm' => $this->bbm,
            'artillery' => $this->artillery,
            'multi_barrel_rocket_launcher' => $this->multi_barrel_rocket_launcher,
            'air_defense_system' => $this->air_defense_system,
            'fixed_wing_aircraft' => $this->fixed_wing_aircraft,
            'helicopter' => $this->helicopter,
            'uav' => $this->uav,
            'cruise_missile' => $this->cruise_missile,
            'ships' => $this->ships,
            'automobile_and_oil_tanker' => $this->automobile_and_oil_tanker,
            'special_equipment' => $this->special_equipment,
            'personnel_total' => $this->personnel_total,
            'personnel_increase' => $this->personnel_increase,
        ]);

        return $dataProvider;
    }

    public function searchEquipment()
    {
        $query = RussiaLoss::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('date, tank, bbm, artillery, multi_barrel_rocket_launcher, 
            air_defense_system, fixed_wing_aircraft, helicopter, uav, cruise_missile,
            ships, automobile_and_oil_tanker, special_equipment')
            ->orderBy('date ASC');

        return $dataProvider;
    }

    public function searchPersonnel()
    {
        $query = RussiaLoss::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->select('date, personnel_total, personnel_increase')
            ->orderBy('date ASC');

        return $dataProvider;
    }
}
