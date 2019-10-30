<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Test]].
 *
 * @see Test
 */
class TestQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Test[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Test|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
