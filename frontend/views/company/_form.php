<?php

use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="contact-clean">

    <?php $form = ActiveForm::begin([
        'options' => [
            'style' => 'max-width: 962px;'
        ]
    ]); ?>

    <h2 class="text-center">Updating Company Details</h2>
    <p class="text-center"> If you are a student, mention the college details.</p>

    <?= Alert::widget() ?>

    <div style="background:pink;color:blue;">
        <?php echo $form->errorSummary($model) ?>
    </div>

    <?= $form->field(
        $model,
        'company_name'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Enter Company Name"
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
        'tagline'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Enter Company Tagline"
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

    <?= $form->field($model, 'about')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'About Company'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        )
    ?>

    <?= $form->field(
        $model,
        'ytlink'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "YouTube Channel Link"
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
        'maplink'
    )->textInput(
        [
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'placeholder' => "Enter Google Map Link"
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
            'Update Company Details',
            [
                'class' => 'btn btn-lg btn-danger col-sm-12',
                'style' => 'background:#9E1C3F;',
                'name' => 'aboutme-button'
            ]
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
