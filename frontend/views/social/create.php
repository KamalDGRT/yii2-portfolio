<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Social */

$this->title = 'Add Products';
?>
<div class="experience-create">
    <div class="content">
        <h3 class="center-text">Add Social Link</h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>




    </div>
</div>