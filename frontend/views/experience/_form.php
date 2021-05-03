<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Experience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'experience-form']); ?>


<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'exp_name')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'placeholder' => 'Experience Name',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'duration')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'placeholder' => 'Experience Duration Line',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'description')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'form-control my-text-input heightunset',
        'placeholder' => 'Experience Description'
    ])->label(false) ?>
</div>

<div class="form-group">
    <?= Html::submitButton('Submit', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>