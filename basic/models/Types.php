<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $ID
 * @property string $description
 * @property integer $isReduced
 *
 * @property NurseShift[] $nurseShifts
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'isReduced'], 'integer'],
            [['description'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'description' => Yii::t('app', 'Description'),
            'isReduced' => Yii::t('app', 'Is Reduced'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNurseShifts()
    {
        return $this->hasMany(NurseShift::className(), ['ns_type' => 'ID']);
    }
}
