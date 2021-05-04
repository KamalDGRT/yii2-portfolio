<?php

use yii\helpers\Html;
?>

<?= Html::a(
    '<i class="fa fa-eye"></i>',
    [
        '/experience/view',
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
        '/experience/update',
        'id' => $model->id
    ],
    [
        'class' => 'btn-xs tooltips',
        'tooltip-placement' => 'top',
        'tooltip' => 'Edit'
    ]
) ?>
