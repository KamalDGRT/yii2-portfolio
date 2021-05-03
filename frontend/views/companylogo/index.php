<?php

/* @var $this yii\web\View */

use common\models\Companylogo;
use yii\helpers\Html;
use yii\data\ActiveDataProvider;

$this->title = 'Profile Picture';
?>

<div style="max-width:450px;">
    <div class="content">

        <div class="jagya15bottom"></div>
        <br><br><br>
        <div class="center-text">
            <h3>Company Logo</h3>
            <div class="jagya20bottom"></div>
            <?php
            $companies = new ActiveDataProvider([
                'query' => Companylogo::find()->where(['created_by' => Yii::$app->user->identity->id]),
            ]);
            $companyCount = $companies->getTotalCount();
            $hasCompanyLogo = $companyCount;
            $imageDetail = Companylogo::findOne(['created_by' => Yii::$app->user->identity->id]);
            // echo '<pre>' . var_dump($imageDetail) . '</pre>';

            //echo $imageDetail->id;
            if ($hasCompanyLogo == 0) {
            ?>
                <?= Html::a(
                    'Upload a Company Logo',
                    ['/companylogo/create/'],
                    ['class' => 'buttonWrap button button-green contactSubmitButton'],
                )
                ?>
            <?php } else if ($hasCompanyLogo == 1) {  ?>
                <?= Html::beginForm(['/companylogo/delete', 'id' => $imageDetail->id], 'post'); ?>
                <?= Html::submitButton(
                    'Remove Current Company Logo & Add a New One',
                    [
                        'class' => 'buttonWrap button button-green contactSubmitButton',
                    ],
                )
                ?>
                <?= Html::endForm() ?>
                <?= Html::a(
                    'View Company Logo',
                    ['/companylogo/view/' . $imageDetail->id],
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