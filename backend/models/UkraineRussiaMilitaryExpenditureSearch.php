<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "ukraine_russia_military_expenditure".
*/
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UkraineRussiaMilitaryExpenditure;

/**
 * UkraineRussiaMilitaryExpenditureSearch represents the model behind the search form of `backend\models\UkraineRussiaMilitaryExpenditure`.
 */
class UkraineRussiaMilitaryExpenditureSearch extends UkraineRussiaMilitaryExpenditure
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'integer'],
            [['ukraine', 'russia'], 'number'],
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
        $query = UkraineRussiaMilitaryExpenditure::find();

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
            'year' => $this->year,
            'ukraine' => $this->ukraine,
            'russia' => $this->russia,
        ]);

        return $dataProvider;
    }
}
