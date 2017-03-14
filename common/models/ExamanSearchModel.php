<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Examan;

/**
 * ExamanSearchModel represents the model behind the search form about `common\models\Examan`.
 */
class ExamanSearchModel extends Examan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idprofesseur', 'idclasse'], 'integer'],
            [['matiere', 'date',], 'safe'],
            [['duree'], 'number'],
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
        $query = Examan::find();

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
            'idprofesseur' => $this->idprofesseur,
            'idclasse' => $this->idclasse,
            'duree' => $this->duree,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'matiere', $this->matiere]);

        return $dataProvider;
    }
}
