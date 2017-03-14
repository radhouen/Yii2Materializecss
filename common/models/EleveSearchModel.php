<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Eleve;

/**
 * EleveSearchModel represents the model behind the search form about `common\models\Eleve`.
 */
class EleveSearchModel extends Eleve
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'User_id', 'classe_id', 'parent_id'], 'integer'],
            [['nom', 'prenom', 'username', 'datenaissance'], 'safe'],
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
        $query = Eleve::find();

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
            'id' => $this->id,
            'datenaissance' => $this->datenaissance,
            'User_id' => $this->User_id,
            'classe_id' => $this->classe_id,
            'parent_id' => $this->parent_id,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
