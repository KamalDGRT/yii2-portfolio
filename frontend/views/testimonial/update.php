<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonial */

$this->title = 'Updating Testimonial';
?>
<div class="testimonial-update">

    <h3 class="center-text">Testimonial Update</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/testimonial/delete', 'id' => $model->id], 'post'); ?>
        <?= Html::submitButton(
            'Delete',
            [
                'class' => 'buttonWrap button button-green contactSubmitButton',
            ],
        )
        ?>
        <?= Html::endForm() ?>

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