<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profilepic */

$this->title = 'Update Profile Picture';

?>
<div class="content">

    <h3 class="center-text">Hi!</h3>
    <h4 class="center-text">This is your Profile Picture !</h4>

    <?php
    if ($model->has_image) {
        echo Html::img($model->getImageUrl(), [
            'style' => 'margin: auto;',
        ]);
    }

    // render the submit button
    ?>

    <div class="vjliti"></div>

    <div class="center-text">
        <?= Html::a(
            'Back',
            ['/profilepic'],
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