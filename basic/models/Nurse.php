<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse".
 *
 * @property integer $ID
 * @property string $nu_onoma
 * @property string $nu_epitheto
 * @property string $nu_bathmida
 * @property integer $nu_is_meiomenou
 * @property double $nu_ores_ergasias
 * @property integer $nu_is_ekpaideuomanos
 * @property integer $ns_is_proistamenos
 * @property integer $nu_is_apospasmenos
 * @property string $nu_apospasmenos_perigafh
 * @property integer $nu_upoloipo_adeias
 * @property integer $nu_upoloipo_repo
 * @property string $nu_profile
 *
 * @property NurseShift[] $nurseShifts
 */
class Nurse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nurse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'nu_is_meiomenou', 'nu_is_ekpaideuomanos', 'ns_is_proistamenos', 'nu_is_apospasmenos', 'nu_upoloipo_adeias', 'nu_upoloipo_repo'], 'integer'],
            [['nu_ores_ergasias'], 'number'],
            [['nu_onoma', 'nu_epitheto'], 'string', 'max' => 60],
            [['nu_bathmida'], 'string', 'max' => 10],
            [['nu_apospasmenos_perigafh'], 'string', 'max' => 150],
            [['nu_profile'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nu_onoma' => 'Όνομα',
            'nu_epitheto' => 'Επίθετο',
            'nu_bathmida' => 'Βαθμίδα',
            'nu_is_meiomenou' => 'Είναι Μειωμένου Ωραρίου',
            'nu_ores_ergasias' => 'Ώρες Εργασίας',
            'nu_is_ekpaideuomanos' => 'Εκπαιδευόμενος',
            'ns_is_proistamenos' => 'Προϊστάμενος',
            'nu_is_apospasmenos' => 'Αποσπασμένος',
            'nu_apospasmenos_perigafh' => 'Αποσπασμένος Περιγραφή',
            'nu_upoloipo_adeias' => 'Υπόλοιπο Άδειας',
            'nu_upoloipo_repo' => 'Υπόλοιπο Ρεπό',
            'nu_profile' => 'Προφίλ',
            'fullName'=>Yii::t('app', 'Full Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNurseShifts()
    {
        return $this->hasMany(NurseShift::className(), ['ns_nurseID' => 'ID']);
    }

    /**
     * @inheritdoc
     * @return NurseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NurseQuery(get_called_class());
    }
    
    public static function dropdownNAIOXI() {
            $dropdown[0] = 'OXI';
            $dropdown[1] = 'NAI';

            return $dropdown;
    }
    
    public static function dropdownBathmida() {
            $dropdown[0] = 'Π.Ε.';
            $dropdown[1] = 'Τ.Ε.';
            $dropdown[2] = 'Δ.Ε.';
            $dropdown[3] = 'ΠΡΑΚΤΙΚΗ';

            return $dropdown;
    }
    
    public static function dropdown() {
        $models = static::find()->all();
        foreach ($models as $model) {
            $dropdown[$model->ID] = $model->nu_onoma .' '. $model->nu_epitheto;
        }
        return $dropdown;
    }
    
    /* Getter for person full name */
    public function getFullName() {
        return $this->nu_onoma . ' ' . $this->nu_epitheto;
    }
    public function __toString() {
        return $this->nu_onoma . ' ' . $this->nu_epitheto;
    }
}
