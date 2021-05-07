<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?>Contact details</h1>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'phone',
            'email:email',
            'whatsapp',
            'address',
            //'skype',
            //'fb',
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
    ]); ?>

</div>
