<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Experience';
?>
<div class="content">

    <h3 class="center-text">Experience</h3>

    <?php $k = 0;
    if ($k) { ?>
        <div class="alert alert-green bg-green-dark center-text ">
            <i class="fa fa-check-square"></i> skill records has been created successfully.
        </div>

        <div class="alert alert-danger bg-red-light center-text ">
            <i class="fa fa-check-square"></i> Skill record has been deleted successfully.
        </div>
    <?php } ?>
    <p>
        <?= Html::a(
            'Add Experience',
            ['experience/create'],
            ['class' => 'button button-fullscreen button-center button-green']
        ) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'id' => 'example',
            'class' => 'table-responsive'
        ],
        'columns' => [
            [
                'header' => '#',
                'class' => 'yii\grid\SerialColumn'
            ],
            [
                'attribute' => 'exp_name',
                'header' => 'Name',
                // 'headerOptions' => ['width' => '80'],
            ],
            [
                'attribute' => 'duration',
                'header' => 'Duration',
                // 'headerOptions' => ['width' => '80'],
            ],
            [
                'attribute' => 'description',
                'header' => 'Description',
                // 'headerOptions' => ['width' => '80'],
            ],
            [
                'header' => 'Edit',
                'content' => function ($model) {
                    return $this->render('_edit', ['model' => $model]);
                }
            ],
        ],
    ]); ?>

    </div>

</div>
