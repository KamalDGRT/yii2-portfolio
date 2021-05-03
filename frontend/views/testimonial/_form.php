<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Education */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'testimonial-form']); ?>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'test_name')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'placeholder' => 'Name',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'tagline')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'placeholder' => 'Tag Line',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'message')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'form-control my-text-input heightunset',
        'placeholder' => 'Message'
    ])->label(false) ?>
</div>

<div class="form-group">
    <?= Html::submitButton('Submit', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>