<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Education */

$this->title = 'Updating Achievement';
?>
<div class="achievement-update">

    <h3 class="center-text">Edit Achievement</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/achievement/delete', 'id' => $model->id], 'post'); ?>
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
