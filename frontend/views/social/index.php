<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Links';
?>
<div class="content">

    <h3 class="center-text">Social Links</h3>

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
            'Add Social Link',
            ['social/create'],
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
                'attribute' => 'soc_url',
                'header' => 'URL',
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