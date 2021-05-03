<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Social */

$this->title = 'Edit Social Link';
?>
<div class="social-update">

    <h3 class="center-text">Edit Social Link</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/social/delete', 'id' => $model->id], 'post'); ?>
        <?= Html::submitButton(
            'Delete',
            [
                'class' => 'btn btn-lg btn-danger col-sm-12',
            ],
        )
        ?>
        <?= Html::endForm() ?>



    </div>
</div>