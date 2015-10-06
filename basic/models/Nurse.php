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
            'nu_onoma' => 'Nu Onoma',
            'nu_epitheto' => 'Nu Epitheto',
            'nu_bathmida' => 'Nu Bathmida',
            'nu_is_meiomenou' => 'Nu Is Meiomenou',
            'nu_ores_ergasias' => 'Nu Ores Ergasias',
            'nu_is_ekpaideuomanos' => 'Nu Is Ekpaideuomanos',
            'ns_is_proistamenos' => 'Ns Is Proistamenos',
            'nu_is_apospasmenos' => 'Nu Is Apospasmenos',
            'nu_apospasmenos_perigafh' => 'Nu Apospasmenos Perigafh',
            'nu_upoloipo_adeias' => 'Nu Upoloipo Adeias',
            'nu_upoloipo_repo' => 'Nu Upoloipo Repo',
            'nu_profile' => 'Nu Profile',
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
