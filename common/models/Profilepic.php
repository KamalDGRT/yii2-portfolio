<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\web\NotFoundHttpException;
use Imagine\Image\Box;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%profilepic}}".
 *
 * @property int $id
 * @property int|null $has_image
 * @property string|null $avatar
 * @property string|null $filename
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Profilepic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $image;

    public static function tableName()
    {
        return '{{%profilepic}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['has_image', 'created_at', 'created_by', 'updated_at'], 'integer'],
            ['has_image', 'default', 'value' => 0],
            [['avatar'], 'string', 'max' => 16],
            [['filename'], 'string', 'max' => 512],
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
            'has_image' => 'Has Image',
            'avatar' => 'Avatar',
            'filename' => 'Filename',
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
     * @return \common\models\query\ProfilepicQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProfilepicQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if (!$this->image)
            throw new NotFoundHttpException("Valid Image File Not Found!!");
        else
            $this->has_image = 1;

        $this->setIsNewRecord(true);
        $this->avatar = Yii::$app->security->generateRandomString(8);
        $this->filename = $this->image->name;

        $saved = parent::save($runValidation, $attributeNames);

        if (!$saved) {
            return false;
        }

        if ($this->image) {
            $imagePath = Yii::getAlias('@projectroot/users/images/' . $this->avatar . '.jpg');

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
        // return a default image placeholder if your source avatar is not found
        return $this->has_image ?
            Yii::$app->params['frontendUrl'] . 'users/images/' . $this->avatar . '.jpg'
            : Yii::$app->params['frontendUrl'] . 'public/imgfc/default.png';
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $imagePath = Yii::getAlias('@projectroot/users/images/' . $this->avatar . '.jpg');
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
}
