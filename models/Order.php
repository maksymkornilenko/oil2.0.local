<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property string $address
 * @property int $count
 * @property string $pay_pal_id
 * @property string $pay_pal_url
 * @property string $local_pay_pal_id
 * @property int $paid
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'country', 'city', 'address', 'count'], 'required'],
            [['created_at', 'updated_at', 'count', 'paid'], 'integer'],
            [['name', 'email', 'phone', 'country', 'city', 'address', 'pay_pal_id', 'pay_pal_url', 'local_pay_pal_id'], 'string', 'max' => 255],
            [['paid'], 'default', 'value' => 0],
            [['pay_pal_id', 'pay_pal_url', 'local_pay_pal_id'], 'default', 'value' => ''],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'country' => Yii::t('app', 'Country'),
            'city' => Yii::t('app', 'City'),
            'address' => Yii::t('app', 'Address'),
            'count' => Yii::t('app', 'Count'),
        ];
    }
}
