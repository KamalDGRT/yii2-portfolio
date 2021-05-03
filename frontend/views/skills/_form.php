<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutme */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="clear"></div>

<div class="row"></div>
<?php $form = ActiveForm::begin(['id' => 'skills-form']); ?>

<div class="formFieldWrap">
    <fieldset>
        <?= $form->field($model, 'skillname')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'Skill Name',
        ])->label(false) ?>
    </fieldset>
</div>

<div class="formFieldWrap">
    <?= $form->field($model, 'skillvalue')->textInput([
        'autofocus' => true,
        'class' => 'contactField',
        'type' => 'number',
        'min' => '0',
        'max' => '100',
        'placeholder' => 'Skill Value',
    ])->label(false) ?>
</div>

<div class="formSubmitButtonErrorsWrap contactFormButton">
    <?= Html::submitButton('Submit', [
        'class' => 'buttonWrap button button-green contactSubmitButton',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>