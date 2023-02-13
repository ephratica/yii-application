<?php
/**
* Team: Untitled, NKU
* Coding by TephrocactusHC 2012026
* This is the model class for table "comment".
*/
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Comment;

/**
 * CommentSearch represents the model behind the search form of `frontend\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment_id'], 'integer'],
            [['comment'], 'safe'],
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
        $query = Comment::find();

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
            'comment_id' => $this->comment_id,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
