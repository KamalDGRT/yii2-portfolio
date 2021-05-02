<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%social}}".
 *
 * @property int $id
 * @property int|null $link_type
 * @property string|null $soc_url
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%social}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_type', 'created_at', 'created_by', 'updated_at'], 'integer'],
            [['soc_url'], 'string', 'max' => 256],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_type' => 'Link Type',
            'soc_url' => 'Soc Url',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }


    public function getSocialLinkTypes()
    {
        return [
            0 => 'Choose Social Link',
            1 => 'Facebook',
            2 => 'Twitter',
            3 => 'Google',
            4 => 'LinkedIn',
            5 => 'YouTube',
            6 => 'Instagram',
            7 => 'Quora',
            8 => 'Google Play Store',
            9 => 'Apple Store iOS',
            10 => 'Podcast',
            11 => 'Blogger',
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
     * Returns the class to be used to get the icon for the social links
     *    
     */
    public function getIconClass()
    {
        return [
            1 => 'fab fa-facebook-f',
            2 => 'fab fa-twitter',
            3 => 'fab fa-google',
            4 => 'fab fa-linkedin-in',
            5 => 'fab fa-youtube',
            6 => 'fab fa-instagram',
            7 => 'fab fa-quora',
            8 => 'fab fa-google-play',
            9 => 'fab fa-app-store-ios',
            10 => 'fa fa-podcast',
            11 => 'fab fa-blogger',
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
     * {@inheritdoc}
     * @return \common\models\query\SocialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SocialQuery(get_called_class());
    }
}
