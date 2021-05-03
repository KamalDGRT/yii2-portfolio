<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Education */

$this->title = 'Create Education';
?>
<div class="education-create">
    <div class="content">
        <h3 class="center-text">Add Education</h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
