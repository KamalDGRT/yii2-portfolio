<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Education */

$this->title = 'Updating Education: ';
?>
<div class="education-update">

    <h3 class="center-text">Editing: <?php echo $model->edu_name; ?></h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
