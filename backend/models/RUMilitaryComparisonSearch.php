<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026 , little5 2011911
*  This is the model class for table "r_u_military_comparison".
*/
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RUMilitaryComparison;

/**
 * RUMilitaryComparisonSearch represents the model behind the search form of `backend\models\RUMilitaryComparison`.
 */
class RUMilitaryComparisonSearch extends RUMilitaryComparison
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indicator'], 'safe'],
            [['russia', 'ukraine'], 'integer'],
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
        $query = RUMilitaryComparison::find();

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
            'russia' => $this->russia,
            'ukraine' => $this->ukraine,
        ]);

        $query->andFilterWhere(['like', 'indicator', $this->indicator]);

        return $dataProvider;
    }
}
