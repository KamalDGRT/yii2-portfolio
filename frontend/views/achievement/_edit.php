<?php

use yii\helpers\Html;
?>

<?= Html::a(
    '<i class="fa fa-eye"></i>',
    [
        '/achievement/view',
        'id' => $model->id
    ],
    [
        'class' => 'btn-xs tooltips',
        'tooltip-placement' => 'top',
        'tooltip' => 'View'
    ]
) ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<?= Html::a(
    '<i class="fa fa-edit"></i>',
    [
        '/achievement/update',
        'id' => $model->id
    ],
    [
        'class' => 'btn-xs tooltips',
        'tooltip-placement' => 'top',
        'tooltip' => 'Edit'
    ]
) ?>
