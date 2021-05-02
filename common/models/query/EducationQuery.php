<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Education]].
 *
 * @see \common\models\Education
 */
class EducationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Education[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    public function creator($userId)
    {
        return $this->andWhere(['created_by' => $userId]);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Education|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
