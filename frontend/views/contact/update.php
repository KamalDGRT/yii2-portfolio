<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */

$this->title = 'Updating Contact Details';
?>
<div class="contact-update">

    <h3 class="center-text">Contact Details Update</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>