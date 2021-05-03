<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profilepic */

$this->title = 'Update Profile Picture';

?>
<div class="content">

    <h3 class="center-text">Hi!</h3>
    <h4 class="center-text">Update your Profile Picture !</h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

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