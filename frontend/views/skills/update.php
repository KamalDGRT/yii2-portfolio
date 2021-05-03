<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skills */

$this->title = 'Updating Skills: ';

?>
<div class="skills-update">

    <h3 class="center-text">Edit Skill</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

        <?= Html::beginForm(['/skills/delete', 'id' => $model->id], 'post'); ?>
        <?= Html::submitButton(
            'Delete Skill',
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