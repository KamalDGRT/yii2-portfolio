<?php

use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutme */
/* @var $form yii\bootstrap4\ActiveForm */

?>

<div class="contact-clean">

    <?php $form = ActiveForm::begin([
        'options' => [
            'style' => 'max-width: 962px;'
        ]
    ]); ?>

    <h2 class="text-center">Updating Contact Details</h2>

    <?= Alert::widget() ?>

    <div style="background:pink;color:blue;">
        <?php echo $form->errorSummary($model) ?>
    </div>

    <?= $form->field(
        $model,
        'phone'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            // 'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "e.g. +916060606060"
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
        'email'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Valid Work Email"
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
        'whatsapp'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "e.g. +917070707070"
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

    <?= $form->field($model, 'address')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Enter Address'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        ) ?>

    <?= $form->field(
        $model,
        'skype'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Enter Skype ID"
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
        'fb'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => 'e.g https://m.me/pageid'
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton(
            'Update Details',
            [
                'class' => 'btn btn-lg btn-danger col-sm-12',
                'style' => 'background:#9E1C3F;',
                'name' => 'aboutme-button'
            ]
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
