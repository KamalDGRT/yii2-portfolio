<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profilepic */

$this->title = 'View Company Logo';

?>
<div class="content">

    <h3 class="center-text">Hi!</h3>
    <h4 class="center-text">This is your Company Logo!</h4><br>

    <?php
    if ($model->has_image) {
        echo Html::img($model->getImageUrl(), [
            'style' => 'margin: auto;',
        ]);
    }
    ?>

    <div class="vjliti"></div>

    <div class="center-text">
        <?= Html::a(
            'Back',
            ['/companylogo'],
            [
                'class' => 'button-vjNichenuBhuru button',
            ],
        )
        ?>

        <?= Html::a(
            'Dashboard',
            ['/site/dashboard'],
            [
                'class' => 'button-vjNichenuBhuru button',
            ],
        )
        ?>

    </div>
</div>