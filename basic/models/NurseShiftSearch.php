<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurseShift;

/**
 * NurseShiftSearch represents the model behind the search form about `app\models\NurseShift`.
 */
class NurseShiftSearch extends NurseShift
{
    public $full_name;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ns_nurseID', 'ns_shiftID', 'ns_type', 'ns_hours'], 'integer'],
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
    
    protected function addCondition($query, $attribute, $partialMatch = false) {
        $value = $this->$attribute;
        if (trim($value) === '') {
            return;
        }

        // add table name to id to prevent ambiguous error with profile.id, 
        // i.e., "tbl_user.id"
        if ($attribute == "ID") {
            $attribute = "nurse.ID";
        }

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
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
        $query = NurseShift::find();

        // add conditions that should always apply here
        $query->innerJoin("nurse", "nurse.ID=nurse_shift.ns_nurseID");
        //$query->with("profile"); // eager load to reduce number of queries        

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        // add extra sort attributes
        $addSortAttributes = ["full_name"];
        foreach ($addSortAttributes as $addSortAttribute) {
            $dataProvider->sort->attributes[$addSortAttribute] = [
                'asc' => [$addSortAttribute => SORT_ASC],
                'desc' => [$addSortAttribute => SORT_DESC],
                'label' => $this->getAttributeLabel($addSortAttribute),
            ];
        }        
        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'ns_nurseID' => $this->ns_nurseID,
            'ns_shiftID' => $this->ns_shiftID,
            'ns_type' => $this->ns_type,
            'ns_hours' => $this->ns_hours,
        ]);
        $this->addCondition($query, 'full_name', true);
        
        return $dataProvider;
    }
}
