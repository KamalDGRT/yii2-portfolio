<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%integration}}".
 *
 * @property int $id
 * @property string|null $header
 * @property string|null $body
 * @property string|null $footer
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Integration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%integration}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['header', 'body', 'footer'], 'string'],
            [['created_at', 'created_by', 'updated_at'], 'integer'],
            [['body'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

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

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header :',
            'body' => 'Body :',
            'footer' => 'Footer :',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
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
     * @return \common\models\query\IntegrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\IntegrationQuery(get_called_class());
    }
}
