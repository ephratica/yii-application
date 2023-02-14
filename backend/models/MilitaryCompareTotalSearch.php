<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026 , little5 2011911
*  This is the model class for table "military_compare_total".
*/
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
            [['type'], 'safe'],
            [['active_military_personnel', 'aircraft', 'armored_vehicles', 'naval_fleet', 'nuclear_warheads'], 'integer'],
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
            'active_military_personnel' => $this->active_military_personnel,
            'aircraft' => $this->aircraft,
            'armored_vehicles' => $this->armored_vehicles,
            'naval_fleet' => $this->naval_fleet,
            'nuclear_warheads' => $this->nuclear_warheads,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
