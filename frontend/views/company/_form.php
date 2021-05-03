<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="clear"></div>

<div class="content">

    <div class="row"></div>
    <?php $form = ActiveForm::begin(['id' => 'company-form']); ?>

    <div class="formFieldWrap homeinout">
        <fieldset>
            <?= $form->field($model, 'company_name')->textInput([
                'autofocus' => true,
                'class' => 'form-control my-text-input',
                'placeholder' => 'Enter Company Name',
            ]) ?>
        </fieldset>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'tagline')->textInput([
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Company Tag Line',
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'about')->textarea([
            'rows' => 10,
            'cols' => 50,
            'class' => 'form-control my-text-input heightunset',
            'placeholder' => 'About Company'
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'ytlink')->textInput([
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'placeholder' => 'YouTube link',
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'maplink')->textInput([
            'autofocus' => true,
            'class' => 'form-control my-text-input',
            'placeholder' => 'Enter Google Map Link',
        ]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Submit', [
            'class' => 'btn btn-lg btn-danger col-sm-12',
            'name' => 'aboutme-button'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>

</div>
