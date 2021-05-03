<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonial */

$this->title = 'Updating Testimonial';
?>
<div class="testimonial-update">

    <h3 class="center-text">Testimonial Update</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/testimonial/delete', 'id' => $model->id], 'post'); ?>
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