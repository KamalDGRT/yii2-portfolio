<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%aboutme}}".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string|null $profession
 * @property string|null $aboutme
 * @property string|null $ytlink
 * @property string|null $website
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Aboutme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%aboutme}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['aboutme'], 'string'],
            [['created_at', 'created_by', 'updated_at'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 40],
            [['profession'], 'string', 'max' => 60],
            [['ytlink', 'website'], 'string', 'max' => 100],
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
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'profession' => 'Profession',
            'aboutme' => 'This is me',
            'ytlink' => 'YouTube Channel Link',
            'website' => 'Website Link',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
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
     * {@inheritdoc}
     * @return \common\models\query\AboutmeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AboutmeQuery(get_called_class());
    }
}
