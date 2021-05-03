<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\web\NotFoundHttpException;
use Imagine\Image\Box;

/**
 * This is the model class for table "{{%companylogo}}".
 *
 * @property int $id
 * @property string|null $image_id
 * @property int|null $has_image
 * @property string|null $image_name
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Companylogo extends \yii\db\ActiveRecord
{

    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%companylogo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['has_image', 'created_at', 'created_by', 'updated_at'], 'integer'],
            [['image_id'], 'string', 'max' => 10],
            [['image_name'], 'string', 'max' => 100],
            [['avatar', 'filename', 'image'], 'safe'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png'],
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
            'image_id' => 'Image ID',
            'has_image' => 'Has Image',
            'image_name' => 'Image Name',
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
     * @return \common\models\query\CompanylogoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CompanylogoQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if (!$this->image)
            throw new NotFoundHttpException("Valid Image File Not Found!!");
        else
            $this->has_image = 1;

        $this->setIsNewRecord(true);
        $this->image_id = Yii::$app->security->generateRandomString(8);
        $this->image_name = $this->image->name;

        $saved = parent::save($runValidation, $attributeNames);

        if (!$saved) {
            return false;
        }

        if ($this->image) {
            $imagePath = Yii::getAlias('@projectroot/users/companylogo/' . $this->image_id . '.jpg');

            if (!is_dir(dirname($imagePath))) {
                FileHelper::createDirectory(dirname($imagePath));
            }

            $this->image->saveAs($imagePath);
            Image::getImagine()
                ->open($imagePath)
                ->thumbnail(new Box(400, 400))
                ->save();
        }
        return true;
    }

    /**
     * fetch stored image url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->has_image ?
            Yii::$app->params['frontendUrl'] . 'users/companylogo/' . $this->image_id . '.jpg'
            : Yii::$app->params['frontendUrl'] . 'public/imgfc/defaultcompany.png';
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $imagePath = Yii::getAlias('@projectroot/users/companylogo/' . $this->image_id . '.jpg');
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
}
