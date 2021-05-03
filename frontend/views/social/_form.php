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
            'class' => 'form-control my-text-input',
        ]
    )->label(false) ?>
</div>

<div class="formFieldWrap homeinout">
    <?= $form->field($model, 'soc_url')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'placeholder' => 'URL with http://',
    ])->label(false) ?>
</div>


<div class="form-group">
    <?= Html::submitButton('Submit', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>