<?php

use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Experience */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="contact-clean">

    <?php $form = ActiveForm::begin([
        'options' => [
            'style' => 'max-width: 962px;'
        ]
    ]); ?>

    <?= Alert::widget() ?>
    <div style="background:pink;color:blue;">
        <?php echo $form->errorSummary($model) ?>
    </div>

    <?= $form->field(
        $model,
        'exp_name'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Name"
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

<?= $form->field(
        $model,
        'duration'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Duration"
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

    <?= $form->field($model, 'description')
        ->textarea([
            'rows' => 15,
            'class' => 'form-control my-text-input',
            'style' => 'min-height:300px;',
            'placeholder' => 'Description'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        )
    ?>

    <?php
    if (!$model->isNewRecord) { ?>
        <div class="row">
            <div class="col-sm-5">
                <?= Html::submitButton(
                    'Update Experience History',
                    [
                        'class' => 'btn btn-lg btn-danger col-sm-12',
                        'style' => 'background:#9E1C3F;',
                        'name' => 'aboutme-button'
                    ]
                ) ?>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <?= Html::beginForm(
                    [
                        '/experience/delete',
                        'id' => $model->id
                    ],
                    'post'
                ) ?>
                <?= Html::submitButton(
                    'Delete Experience History',
                    [
                        'class' => 'btn btn-lg btn-danger col-sm-12',
                        'style' => 'background:#9E1C3F;'
                    ]
                ) ?>
                <?= Html::endForm() ?>
            </div>

        </div>

    <?php } else { ?>
        <?= Html::submitButton(
            'Add Experience History',
            [
                'class' => 'btn btn-lg btn-danger col-sm-12',
                'style' => 'background:#9E1C3F;',
                'name' => 'aboutme-button'
            ]
        ) ?>
    <?php } ?>
    <?php ActiveForm::end(); ?>
</div>
