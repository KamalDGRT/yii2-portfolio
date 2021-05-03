<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skill */

$this->title = 'Create Skills';
?>
<div class="skills-create">
    <div class="content">
        <h1 class="center-text">Add Skill</h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>