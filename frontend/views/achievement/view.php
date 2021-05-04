<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Achievement */

$this->title = 'Achievement | ' . $model->ach_name;
\yii\web\YiiAsset::register($this);
?>
<div class="achievement-view">

    <h1><?= Html::encode($model->ach_name) ?></h1>

    <div class="row">
        <div class="col-sm-5">
            <?= Html::a(
                'Update Achievement',
                [
                    '/achievement/update',
                    'id' => $model->id
                ],
                [
                    'class' => 'btn btn-lg btn-primary col-sm-12',
                    'name' => 'aboutme-button'
                ]
            ) ?>
        </div>

        <div class="col-sm-2"></div>

        <div class="col-sm-5">
            <?= Html::beginForm(
                [
                    '/achievement/delete',
                    'id' => $model->id
                ],
                'post'
            ) ?>
            <?= Html::submitButton(
                'Delete Achievement',
                [
                    'class' => 'btn btn-lg btn-danger col-sm-12',
                ]
            ) ?>
            <?= Html::endForm() ?>
        </div>

    </div>

    <br>

    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'id' => 'example',
            'class' => 'table table-bordered table-info my-0 black'
        ],
        'attributes' => [
            'ach_name',
            'description:ntext',
            [
                'label' => 'Created At',
                'value' => function ($model) {
                    $item_date = $model->created_at;
                    $dt = new DateTime();
                    $dt->setTimestamp($item_date);
                    $dt->setTimezone(new DateTimeZone("Asia/Calcutta"));
                    $would_be = $dt->format('g:ia T \o\n d-m-Y');
                    return $would_be;
                }
            ],
            [
                'label' => 'Updated At',
                'value' => function ($model) {
                    $item_date = $model->updated_at;
                    $dt = new DateTime();
                    $dt->setTimestamp($item_date);
                    $dt->setTimezone(new DateTimeZone("Asia/Calcutta"));
                    $would_be = $dt->format('g:ia T \o\n d-m-Y');
                    return $would_be;
                }
            ]
        ]
    ]) ?>

</div>
