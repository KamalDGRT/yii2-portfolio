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

    <h2 class="text-center">Integration</h2>

    <?= Alert::widget() ?>

    <div style="background:pink;color:blue;">
        <?php echo $form->errorSummary($model) ?>
    </div>
    <?= $form->field($model, 'header')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Code will be placed before </head>'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        ) ?>

    <?= $form->field($model, 'body')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Code will be placed in Enquiry Form'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        ) ?>

    <?= $form->field($model, 'footer')
        ->textarea([
            'rows' => 10,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Code will be placed before </body>'
        ])
        ->label(
            null,
            [
                'class' => 'my-span-label'
            ]
        ) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', [
            'class' => 'btn btn-lg btn-danger col-sm-12',
            'name' => 'aboutme-button'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
