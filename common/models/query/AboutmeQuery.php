<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Aboutme]].
 *
 * @see \common\models\Aboutme
 */
class AboutmeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Aboutme[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Aboutme|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
