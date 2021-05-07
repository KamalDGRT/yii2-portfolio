<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Education';
?>
<div class="content">

    <?php $k = 0;
    if ($k) { ?>
        <div class="alert alert-green bg-green-dark center-text ">
            <i class="fa fa-check-square"></i> Education details has been created successfully.
        </div>

        <div class="alert alert-danger bg-red-light center-text ">
            <i class="fa fa-check-square"></i> Education details has been deleted successfully.
        </div>
    <?php } ?>

    <div class="container-fluid">
        <div class="card shadow text-center">
            <div class="card-header py-3">
                <h3 class="text-primary m-0 font-weight-bold">Education History</h3>
            </div>
            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'tableOptions' => [
                            'id' => 'example',
                            'class' => 'table my-0 black',
                        ],
                        'columns' => [
                            [
                                'header' => '#',
                                'class' => 'yii\grid\SerialColumn'
                            ],
                            [
                                'attribute' => 'edu_name',
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
                                'header' => 'Options',
                                'content' => function ($model) {
                                    return $this->render('_edit', ['model' => $model]);
                                }
                            ]
                        ]
                    ]); ?>
                </div>

            </div>
            <div class="card text-center" style="width: 18rem;">

                <p class="card-text black">To add Education History,</p>
                <?= Html::a(
                    'Click Here!',
                    ['/education/create'],
                    [
                        'class' => 'btn btn-primary',
                    ]
                )
                ?>
            </div>
        </div>
    </div>
</div>
