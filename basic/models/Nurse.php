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
            [['ID'], 'required'],
            [['ID', 'nu_is_meiomenou', 'nu_is_ekpaideuomanos', 'ns_is_proistamenos', 'nu_is_apospasmenos', 'nu_upoloipo_adeias', 'nu_upoloipo_repo'], 'integer'],
            [['nu_ores_ergasias'], 'number'],
            [['nu_onoma', 'nu_epitheto'], 'string', 'max' => 60],
            [['nu_bathmida'], 'string', 'max' => 5],
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
            'nu_upoloipo_adeias' => 'Nu Upoloipo Adeias',
            'nu_upoloipo_repo' => 'Nu Upoloipo Repo',
            'nu_profile' => 'Προφίλ',
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
}
