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
            'class' => 'form-control my-text-input',
            'placeholder' => 'Skill Name',
        ])->label(false) ?>
    </fieldset>
</div>

<div class="formFieldWrap">
    <?= $form->field($model, 'skillvalue')->textInput([
        'autofocus' => true,
        'class' => 'form-control my-text-input',
        'type' => 'number',
        'min' => '0',
        'max' => '100',
        'placeholder' => 'Skill Value',
    ])->label(false) ?>
</div>

<div class="form-group">
    <?= Html::submitButton('Submit', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'aboutme-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>