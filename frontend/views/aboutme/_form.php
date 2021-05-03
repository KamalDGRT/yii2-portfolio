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

    <h2 class="text-center">Updating About Me!</h2>

    <?= Alert::widget() ?>

    <div style="background:pink;color:blue;">
        <?php echo $form->errorSummary($model) ?>
    </div>
    <?= $form->field(
        $model,
        'firstname',
        [
            'template' => '{label}<span class="required" style="color:red;">*</span>
                            {input}
                            <div class="invalid-feedback"></div>'
        ]
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "First Name"
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
        'lastname',
        [
            'template' => '{label}<span class="required" style="color:red;">*</span>
                            {input}
                            <div class="invalid-feedback"></div>'
        ]
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "Last Name"
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
        'profession'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "Profession"
        ]
    )->label(
        null, // null will give the label from the attributeLabels function
        [
            'class' => 'my-span-label'
        ]
    )
    ?>

    <?= $form->field($model, 'aboutme')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Describe yourself briefly.'
        ])
        ->label(null, ['class' => 'my-span-label']) ?>

    <?= $form->field(
        $model,
        'ytlink'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "Your YouTuble Channel Link"
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
        'website'
    )->textInput(
        [
            'class' => 'form-control my-text-input',
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "Your Website Link"
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
