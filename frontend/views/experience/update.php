<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Experience */

$this->title = 'Edit Experience';
?>
<div class="experience-update">

    <h3 class="center-text">Edit Experience</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/experience/delete', 'id' => $model->id], 'post'); ?>
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
