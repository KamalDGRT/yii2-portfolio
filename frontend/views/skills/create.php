<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skills */

$this->title = 'Create Skills';
?>
<div class="skills-create">
    <div class="content">
        <h1 class="center-text">Add Skill</h1>

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