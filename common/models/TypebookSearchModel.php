<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Typebook;

/**
 * TypebookSearchModel represents the model behind the search form about `common\models\Typebook`.
 */
class TypebookSearchModel extends Typebook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtypebook'], 'integer'],
            [['typebook', 'matière'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Typebook::find();

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
            'idtypebook' => $this->idtypebook,
        ]);

        $query->andFilterWhere(['like', 'typebook', $this->typebook])
            ->andFilterWhere(['like', 'matière', $this->matière]);

        return $dataProvider;
    }
}
