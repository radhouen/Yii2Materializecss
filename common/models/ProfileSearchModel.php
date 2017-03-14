<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profile;

/**
 * ProfileSearchModel represents the model behind the search form about `common\models\Profile`.
 */
class ProfileSearchModel extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['First_name', 'last_name', 'e_mail', 'tel_num', 'username', 'adress'], 'safe'],
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
        $query = Profile::find();

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
        $query->andFilterWhere(['like', 'First_name', $this->First_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'tel_num', $this->tel_num])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'adress', $this->adress]);

        return $dataProvider;
    }
}
