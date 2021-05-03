<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skills */

$this->title = 'Updating Skills: ';

?>
<div class="skills-update">

    <h3 class="center-text">Edit Skill</h3>

    <div class="content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

        <?= Html::beginForm(['/skill/delete', 'id' => $model->id], 'post'); ?>
        <?= Html::submitButton(
            'Delete Skill',
            [
                'class' => 'btn btn-lg btn-danger col-sm-12',
            ],
        )
        ?>
        <?= Html::endForm() ?>

    </div>
</div>