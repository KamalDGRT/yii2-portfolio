<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Education */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'achievement-form']); ?>


<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'ach_name')->textInput([
        'autofocus' => true,
        'class' => 'contactField',
        'placeholder' => 'Achievement Name',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'description')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'contactField heightunset',
        'placeholder' => 'Achievement Description'
    ])->label(false) ?>
</div>

<div class="formSubmitButtonErrorsWrap contactFormButton">
    <?= Html::submitButton('Submit', [
        'class' => 'buttonWrap button button-green contactSubmitButton',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>