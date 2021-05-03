<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Integration */

$this->title = 'Integration';
?>
<div class="experience-update">

    <h3 class="center-text">Integration</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
