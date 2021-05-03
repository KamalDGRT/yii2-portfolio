<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Education */

$this->title = 'New Testimonial';
?>
<div class="education-create">
    <div class="content">
        <h3 class="center-text">New Testimonial</h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>




    </div>
</div>