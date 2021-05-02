<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%testimonial}}".
 *
 * @property int $id
 * @property string|null $test_name
 * @property string|null $tagline
 * @property string|null $message
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%testimonial}}';
    }

    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::class,
            [
                'class' => \yii\behaviors\BlameableBehavior::class,
                'updatedByAttribute' => false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['created_at', 'created_by', 'updated_at'], 'integer'],
            [['test_name', 'tagline'], 'string', 'max' => 100],
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
            'test_name' => 'Test Name',
            'tagline' => 'Tagline',
            'message' => 'Message',
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
        return static::find()->creator($createdBy)->all();
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
     * @return \common\models\query\TestimonialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TestimonialQuery(get_called_class());
    }
}
