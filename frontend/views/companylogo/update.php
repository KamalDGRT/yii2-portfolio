<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Companylogo */

$this->title = 'Updating Companylogo: ' . $model->id;

?>
<div class="companylogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
