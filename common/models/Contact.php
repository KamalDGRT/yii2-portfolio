<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%contact}}".
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $address
 * @property string|null $skype
 * @property string|null $fb
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}

     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false,
            ]
        ];
    }

    public static function tableName()
    {
        return '{{%contact}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address'], 'string'],
            [['created_by', 'created_at', 'updated_at'], 'integer'],
            [['phone'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 100],
            [['whatsapp'], 'string', 'max' => 50],
            [['skype', 'fb'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone :',
            'email' => 'Email :',
            'whatsapp' => 'Whatsapp :',
            'address' => 'Address :',
            'skype' => 'Skype :',
            'fb' => 'FB Page Messenger URL :',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Finds model based on who created it
     *
     * @param int $createdBy
     * @return static|null
     */
    public static function findByCreator($createdBy)
    {
        return static::findOne(['created_by' => $createdBy]);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContactQuery(get_called_class());
    }
}
