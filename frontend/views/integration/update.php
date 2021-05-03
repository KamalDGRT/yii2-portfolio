<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Integration */

$this->title = 'Integration';
?>
<div class="experience-update">

    <h3 class="center-text">Integration</h3>

    <div class="content">
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
</div>