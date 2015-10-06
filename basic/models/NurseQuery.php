<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Nurse]].
 *
 * @see Nurse
 */
class NurseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Nurse[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Nurse|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}