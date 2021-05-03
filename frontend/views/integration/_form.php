<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Experience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'integration-form']); ?>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'header')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'form-control my-text-input heightunset',
        'placeholder' => 'Code will be placed before </head>'
    ]) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'body')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'form-control my-text-input heightunset',
        'placeholder' => 'Code will be placed in Enquiry Form'
    ]) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'footer')->textarea([
        'rows' => 10,
        'cols' => 50,
        'class' => 'form-control my-text-input heightunset',
        'placeholder' => 'Code will be placed before </body>'
    ]) ?>
</div>


<div class="form-group">
    <?= Html::submitButton('Submit', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>