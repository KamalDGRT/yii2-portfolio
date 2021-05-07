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

    </div>
</div>
