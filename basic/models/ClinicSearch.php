<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clinic;

/**
 * ClinicSearch represents the model behind the search form about `app\models\Clinic`.
 */
class ClinicSearch extends Clinic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'cl_name'], 'integer'],
            [['cl_proistamenos', 'cl_tomearxhs', 'cl_dieuthunths', 'cl_phone1', 'cl_phone2'], 'safe'],
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
        $query = Clinic::find();

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
            'cl_name' => $this->cl_name,
        ]);

        $query->andFilterWhere(['like', 'cl_proistamenos', $this->cl_proistamenos])
            ->andFilterWhere(['like', 'cl_tomearxhs', $this->cl_tomearxhs])
            ->andFilterWhere(['like', 'cl_dieuthunths', $this->cl_dieuthunths])
            ->andFilterWhere(['like', 'cl_phone1', $this->cl_phone1])
            ->andFilterWhere(['like', 'cl_phone2', $this->cl_phone2]);

        return $dataProvider;
    }
}
