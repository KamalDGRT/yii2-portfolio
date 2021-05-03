<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Education */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'education-form']); ?>


<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'edu_name')->textInput([
        'autofocus' => true,
        'class' => 'contactField',
        'placeholder' => 'Name',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'duration')->textInput([
        'autofocus' => true,
        'class' => 'contactField',
        'placeholder' => 'Duration',
    ])->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'description')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'contactField heightunset',
        'placeholder' => 'Description'
    ])->label(false) ?>
</div>

<div class="formSubmitButtonErrorsWrap contactFormButton">
    <?= Html::submitButton('Submit', [
        'class' => 'buttonWrap button button-green contactSubmitButton',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>