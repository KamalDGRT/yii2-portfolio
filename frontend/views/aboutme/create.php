<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutme */

$this->title = 'Create Aboutme';

?>
<div class="aboutme-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>