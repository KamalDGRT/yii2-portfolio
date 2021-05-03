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
    'id' => 'profilepic-form'
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

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', [
        'class' => 'btn btn-lg btn-danger col-sm-12',
        'name' => 'profilepic-button'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>

<?php
// render a delete image button 
if (!$model->isNewRecord) { ?>
    <?= Html::beginForm(['/profilepic/delete', 'id' => $model->id], 'post'); ?>
    <?= Html::submitButton(
        'Delete',
        [
            'class' => 'btn btn-lg btn-danger col-sm-12',
        ],
    )
    ?>
    <?= Html::endForm() ?>

<?php }  ?>

<br>