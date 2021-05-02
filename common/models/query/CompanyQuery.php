<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Company]].
 *
 * @see \common\models\Company
 */
class CompanyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Company[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Company|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
