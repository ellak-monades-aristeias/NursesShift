<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_shift".
 *
 * @property integer $ID
 * @property integer $ns_nurseID
 * @property integer $ns_shiftID
 * @property integer $ns_type
 * @property integer $ns_hours
 *
 * @property Nurse $nsNurse
 * @property Shifts $nsShift
 * @property Types $nsType
 */
class NurseShift extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nurse_shift';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ns_nurseID', 'ns_shiftID', 'ns_type'], 'required'],
            [['ns_nurseID', 'ns_shiftID', 'ns_type', 'ns_hours'], 'integer'],
            [['ns_nurseID'], 'exist', 'skipOnError' => true, 'targetClass' => Nurse::className(), 'targetAttribute' => ['ns_nurseID' => 'ID']],
            [['ns_shiftID'], 'exist', 'skipOnError' => true, 'targetClass' => Shifts::className(), 'targetAttribute' => ['ns_shiftID' => 'ID']],
            [['ns_type'], 'exist', 'skipOnError' => true, 'targetClass' => Types::className(), 'targetAttribute' => ['ns_type' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ns_nurseID' => Yii::t('app', 'Ns Nurse ID'),
            'ns_shiftID' => Yii::t('app', 'Ns Shift ID'),
            'ns_type' => Yii::t('app', 'Ns Type'),
            'ns_hours' => Yii::t('app', 'Ns Hours'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNsNurse()
    {
        return $this->hasOne(Nurse::className(), ['ID' => 'ns_nurseID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNsShift()
    {
        return $this->hasOne(Shifts::className(), ['ID' => 'ns_shiftID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNsType()
    {
        return $this->hasOne(Types::className(), ['ID' => 'ns_type']);
    }

    /**
     * @inheritdoc
     * @return NurseShiftQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NurseShiftQuery(get_called_class());
    }
}
