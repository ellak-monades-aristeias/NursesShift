<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shifts".
 *
 * @property integer $sh_ID
 * @property string $sh_date
 * @property integer $sh_is_argia
 * @property integer $sh_is_efhmeria
 * @property integer $sh_is_weekend
 * @property integer $sh_elaxisto_prosopiko
 * @property string $sh_bardia
 *
 * @property NurseShift[] $nurseShifts
 */
class Shifts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shifts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sh_date', 'sh_is_argia', 'sh_is_efhmeria', 'sh_is_weekend', 'sh_elaxisto_prosopiko'], 'required'],
            [['sh_date'], 'safe'],
            [['sh_is_argia', 'sh_is_efhmeria', 'sh_is_weekend', 'sh_elaxisto_prosopiko'], 'integer'],
            [['sh_bardia'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'Sh ID'),
            'sh_date' => Yii::t('app', 'Sh Date'),
            'sh_is_argia' => Yii::t('app', 'Sh Is Argia'),
            'sh_is_efhmeria' => Yii::t('app', 'Sh Is Efhmeria'),
            'sh_is_weekend' => Yii::t('app', 'Sh Is Weekend'),
            'sh_elaxisto_prosopiko' => Yii::t('app', 'Sh Elaxisto Prosopiko'),
            'sh_bardia' => Yii::t('app', 'Sh Bardia'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNurseShifts()
    {
        return $this->hasMany(NurseShift::className(), ['ns_shiftID' => 'ID']);
    }

    /**
     * @inheritdoc
     * @return ShiftsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShiftsQuery(get_called_class());
    }
    
    public static function dropdown() {
       $models = static::find()->all();
       foreach ($models as $model) {
           $dropdown[$model->ID] = $model->sh_date;
       }
       return $dropdown;
   }
}
