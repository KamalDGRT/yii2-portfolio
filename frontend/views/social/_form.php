<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Social */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin(['id' => 'social-form']); ?>


<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'link_type')->dropDownList(
        $model->getSocialLinkTypes(),
        [
            'autofocus' => true,
            'class' => 'contactField',
        ]
    )->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'soc_url')->textInput([
        'autofocus' => true,
        'class' => 'contactField',
        'placeholder' => 'URL with http://',
    ])->label(false) ?>
</div>


<div class="formSubmitButtonErrorsWrap contactFormButton">
    <?= Html::submitButton('Submit', [
        'class' => 'buttonWrap button button-green contactSubmitButton',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>