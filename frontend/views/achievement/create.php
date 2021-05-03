<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Education */

$this->title = 'Adding Achievement';
?>
<div class="achievement-create">
    <div class="content">
        <h3 class="center-text">Add Achievement</h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
