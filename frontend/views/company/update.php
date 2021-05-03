<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = 'Updating Company';

?>
<div class="company-update">

    <h3 class="center-text">Business Details Update</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>