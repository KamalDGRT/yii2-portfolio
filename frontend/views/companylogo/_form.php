<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profilepic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clear"></div>

<div class="row"></div>

<?php $form = ActiveForm::begin([
    'options' => [
        'enctype' => 'multipart/form-data'
    ],
    'id' => 'companylogo-form'
]); ?>

<?php echo $form->errorSummary($model) ?>

<div class="center-text">
    <input type="file" id="imageFile" name="image">
</div>
<br>
<?php
if ($model->has_image) {
    echo Html::img($model->getImageUrl(), [
        'class' => 'img-thumbnail',
    ]);
}

// render the submit button
?>

<div class="formSubmitButtonErrorsWrap contactFormButton">
    <?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', [
        'class' => 'buttonWrap button button-green contactSubmitButton',
        'name' => 'profilepic-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>

<?php
// render a delete image button 
if (!$model->isNewRecord) { ?>
    <?= Html::beginForm(['/companylogo/delete', 'id' => $model->id], 'post'); ?>
    <?= Html::submitButton(
        'Delete',
        [
            'class' => 'buttonWrap button button-green contactSubmitButton',
        ],
    )
    ?>
    <?= Html::endForm() ?>

<?php }  ?>

<br>