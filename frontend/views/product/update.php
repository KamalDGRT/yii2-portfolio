<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = 'Edit Product';
?>
<div class="product-update">

    <h3 class="center-text">Edit Product</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
        <?= Html::beginForm(['/product/delete', 'id' => $model->id], 'post'); ?>
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
