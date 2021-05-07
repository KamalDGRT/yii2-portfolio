<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Profilepic;
use yii\data\ActiveDataProvider;

$this->title = 'Profile Picture';
?>


<div class="content">

    <div class="jagya15bottom"></div>
    <br><br><br>
    <div class="center-text">

        <div class="jagya20bottom"></div>
        <?php
        $profiles = new ActiveDataProvider([
            'query' => Profilepic::find()->where(['created_by' => Yii::$app->user->identity->id])
        ]);
        $profileCount = $profiles->getTotalCount();
        $hasProfilePic = $profileCount;
        $imageDetail = Profilepic::findOne(['created_by' => Yii::$app->user->identity->id]);
        // echo '<pre>' . var_dump($imageDetail) . '</pre>';

        if ($hasProfilePic == 0) {
        ?>
            <?= Html::a(
                'Upload a Profile Photo',
                ['/profilepic/create/'],
                ['class' => 'btn btn-lg btn-danger col-sm-12']
            )
            ?>
        <?php } else if ($hasProfilePic == 1) {  ?>

            <h3 class="center-text">Hi!</h3>
            <h4 class="center-text">This is your Profile Picture !</h4>

            <?php

            echo Html::img($imageDetail->getImageUrl(), [
                'style' => 'margin: auto;'
            ]);


            // render the submit button
            ?>
            <?= Html::beginForm(['/profilepic/delete', 'id' => $imageDetail->id], 'post'); ?>
            <?= Html::submitButton(
                'Remove Current Profile Photo & Add a New One',
                [
                    'class' => 'btn btn-lg btn-danger col-sm-12'
                ]
            )
            ?>
            <?= Html::endForm() ?>

        <?php } ?>
    </div>

</div>
