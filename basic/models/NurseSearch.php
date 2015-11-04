<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nurse;

/**
 * NurseSearch represents the model behind the search form about `app\models\Nurse`.
 */
class NurseSearch extends Nurse
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'nu_is_meiomenou', 'nu_is_ekpaideuomanos', 'ns_is_proistamenos', 'nu_is_apospasmenos', 'nu_upoloipo_adeias', 'nu_upoloipo_repo'], 'integer'],
            [['nu_onoma', 'nu_epitheto', 'nu_bathmida', 'nu_apospasmenos_perigafh', 'nu_profile'], 'safe'],
            [['nu_ores_ergasias'], 'number'],
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
        $query = Nurse::find();

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
            'ID' => $this->ID,
            'nu_is_meiomenou' => $this->nu_is_meiomenou,
            'nu_ores_ergasias' => $this->nu_ores_ergasias,
            'nu_is_ekpaideuomanos' => $this->nu_is_ekpaideuomanos,
            'ns_is_proistamenos' => $this->ns_is_proistamenos,
            'nu_is_apospasmenos' => $this->nu_is_apospasmenos,
            'nu_upoloipo_adeias' => $this->nu_upoloipo_adeias,
            'nu_upoloipo_repo' => $this->nu_upoloipo_repo,
        ]);

        $query->andFilterWhere(['like', 'nu_onoma', $this->nu_onoma])
            ->andFilterWhere(['like', 'nu_epitheto', $this->nu_epitheto])
            ->andFilterWhere(['like', 'nu_bathmida', $this->nu_bathmida])
            ->andFilterWhere(['like', 'nu_apospasmenos_perigafh', $this->nu_apospasmenos_perigafh])
            ->andFilterWhere(['like', 'nu_profile', $this->nu_profile]);

        return $dataProvider;
    }
}
