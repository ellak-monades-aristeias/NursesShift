<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NurseShift]].
 *
 * @see NurseShift
 */
class NurseShiftQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return NurseShift[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NurseShift|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}