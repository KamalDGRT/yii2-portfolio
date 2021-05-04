<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profilepic */

$this->title = 'Create Profilepic';
?>
<div class="content">

    <h3 class="center-text">Hi, Upload your profile picture!</h3>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

    </div>

</div>
