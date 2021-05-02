<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutme */

$this->title = 'Updating About Me';
?>
<div class="aboutme-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>