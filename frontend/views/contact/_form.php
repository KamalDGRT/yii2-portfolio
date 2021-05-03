<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutme */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="clear"></div>

<div class="content">

    <div class="row"></div>
    <?php $form = ActiveForm::begin(['id' => 'aboutme-form']); ?>

    <div class="formFieldWrap">
        <fieldset>
            <?= $form->field($model, 'phone')->textInput([
                'autofocus' => true,
                'class' => 'contactField',
                'placeholder' => 'e.g. +916060606060',
            ]) ?>
        </fieldset>
    </div>

    <div class="formFieldWrap">
        <?= $form->field($model, 'email')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'Valid Work Email',
        ]) ?>
    </div>

    <div class="formFieldWrap">
        <?= $form->field($model, 'whatsapp')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'e.g. 7060606060',
        ]) ?>
    </div>

    <div class="formFieldWrap">
        <?= $form->field($model, 'address')->textarea([
            'rows' => 10,
            'cols' => 50,
            'class' => 'contactField heightunset',
            'placeholder' => 'Enter Address'
        ]) ?>
    </div>

    <div class="formFieldWrap">
        <?= $form->field($model, 'skype')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'Enter Skype id',
        ]) ?>
    </div>

    <div class="formFieldWrap">
        <?= $form->field($model, 'fb')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'e.g https://m.me/pageid',
        ]) ?>
    </div>

    <div class="formSubmitButtonErrorsWrap contactFormButton">
        <?= Html::submitButton('Submit', [
            'class' => 'buttonWrap button button-green contactSubmitButton',
            'name' => 'aboutme-button'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="vjliti"></div>

    <div class="center-text">
        <!-- <?= Html::a(
                    'Preview Card',
                    ['#'],
                    [
                        'class' => 'button-vjNichenuBhuru button',
                        'target' => '_blank',
                    ],
                )
                ?> -->

        <?= Html::a(
            'Dashboard',
            ['/site/dashboard'],
            [
                'class' => 'button-vjNichenuBhuru button',
                // 'target' => '_blank',
            ],
        )
        ?>

    </div>

</div>