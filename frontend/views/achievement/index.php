<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Achievements';
?>
<div class="content">

    <h3 class="center-text">Achievement</h3>

    <?php $k = 0;
    if ($k) { ?>
        <div class="alert alert-green bg-green-dark center-text ">
            <i class="fa fa-check-square"></i> Achievement has been created successfully.
        </div>

        <div class="alert alert-danger bg-red-light center-text ">
            <i class="fa fa-check-square"></i> Achievement has been deleted successfully.
        </div>
    <?php } ?>
    <p>
        <?= Html::a(
            'Add Achievement',
            ['achievement/create'],
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
                'attribute' => 'ach_name',
                'header' => 'Name',
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

    <div class="vjliti"></div>

    <div class="center-text">
        <!-- <?= Html::a(
                    'Preview Card',
                    ['#'],
                    [
                        'class' => 'button-vjNichenuBhuru button',
                        'target' => '_blank',
                    ],
                )
                ?> -->

        <?= Html::a(
            'Dashboard',
            ['/site/dashboard'],
            [
                'class' => 'button-vjNichenuBhuru button',
                // 'target' => '_blank',
            ],
        )
        ?>

    </div>

</div>