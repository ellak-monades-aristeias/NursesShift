<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clinic".
 *
 * @property integer $ID
 * @property integer $cl_name
 * @property string $cl_proistamenos
 * @property string $cl_tomearxhs
 * @property string $cl_dieuthunths
 * @property string $cl_phone1
 * @property string $cl_phone2
 */
class Clinic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clinic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cl_name', 'cl_proistamenos', 'cl_tomearxhs', 'cl_dieuthunths', 'cl_phone1'], 'required'],
            [['cl_name', 'cl_proistamenos', 'cl_tomearxhs', 'cl_dieuthunths'], 'string', 'max' => 60],
            [['cl_phone1', 'cl_phone2'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'cl_name' => Yii::t('app', 'Cl Name'),
            'cl_proistamenos' => Yii::t('app', 'Cl Proistamenos'),
            'cl_tomearxhs' => Yii::t('app', 'Cl Tomearxhs'),
            'cl_dieuthunths' => Yii::t('app', 'Cl Dieuthunths'),
            'cl_phone1' => Yii::t('app', 'Cl Phone1'),
            'cl_phone2' => Yii::t('app', 'Cl Phone2'),
        ];
    }
}
