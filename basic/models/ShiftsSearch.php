<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shifts;

/**
 * ShiftsSearch represents the model behind the search form about `app\models\Shifts`.
 */
class ShiftsSearch extends Shifts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'sh_is_argia', 'sh_is_efhmeria', 'sh_is_weekend', 'sh_elaxisto_prosopiko'], 'integer'],
            [['sh_date', 'sh_bardia'], 'safe'],
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
        $query = Shifts::find();

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
            'sh_date' => $this->sh_date,
            'sh_is_argia' => $this->sh_is_argia,
            'sh_is_efhmeria' => $this->sh_is_efhmeria,
            'sh_is_weekend' => $this->sh_is_weekend,
            'sh_elaxisto_prosopiko' => $this->sh_elaxisto_prosopiko,
        ]);

        $query->andFilterWhere(['like', 'sh_bardia', $this->sh_bardia]);

        return $dataProvider;
    }
}
