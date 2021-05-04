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
        <br>

    </div>
</div>
