<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Experience */

$this->title = 'Add Experience';
?>
<div class="experience-create">
    <div class="content">
        <h3 class="center-text">Add Experience</h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
