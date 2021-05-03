<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Profilepic;
use yii\data\ActiveDataProvider;

$this->title = 'Profile Picture';
?>

<div style="max-width:450px;">
    <div class="content">

        <div class="jagya15bottom"></div>
        <br><br><br>
        <div class="center-text">
            <h3>Profile Picture</h3>
            <div class="jagya20bottom"></div>
            <?php
            $profiles = new ActiveDataProvider([
                'query' => Profilepic::find()->where(['created_by' => Yii::$app->user->identity->id]),
            ]);
            $profileCount = $profiles->getTotalCount();
            $hasProfilePic = $profileCount;
            $imageDetail = Profilepic::findOne(['created_by' => Yii::$app->user->identity->id]);
            // echo '<pre>' . var_dump($imageDetail) . '</pre>';

            //echo $imageDetail->id;
            if ($hasProfilePic == 0) {
            ?>
                <?= Html::a(
                    'Upload a Profile Photo',
                    ['/profilepic/create/'],
                    ['class' => 'buttonWrap button button-green contactSubmitButton'],
                )
                ?>
            <?php } else if ($hasProfilePic == 1) {  ?>
                <?= Html::beginForm(['/profilepic/delete', 'id' => $imageDetail->id], 'post'); ?>
                <?= Html::submitButton(
                    'Remove Current Profile Photo & Add a New One',
                    [
                        'class' => 'buttonWrap button button-green contactSubmitButton',
                    ],
                )
                ?>
                <?= Html::endForm() ?>
                <?= Html::a(
                    'View Profile Photo',
                    ['/profilepic/view/' . $imageDetail->id],
                    ['class' => 'buttonWrap button button-green contactSubmitButton'],
                )
                ?>
            <?php } ?>
        </div>

        <div class="vjliti"></div>

        <div class="center-text">
            <!-- <?= Html::a(
                        'Preview Card',
                        ['#'],
                        [
                            'class' => 'button-vjNichenuBhuru button',
                            'target' => '_blank',
                        ],
                    )
                    ?> -->

            <?= Html::a(
                'Dashboard',
                ['/site/dashboard'],
                [
                    'class' => 'button-vjNichenuBhuru button',
                    // 'target' => '_blank',
                ],
            )
            ?>

        </div>
    </div>

</div>