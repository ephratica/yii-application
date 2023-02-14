<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "ukraine_civilian_casualties".
*/
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
            [['type'], 'safe'],
            [['total', 'children'], 'integer'],
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
            'total' => $this->total,
            'children' => $this->children,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
