<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Dashboard';

echo "This is Dashboard";

function giveMeCard($cardValue, $iconClass) {
    $cardContent = '<div class="col-xl-3 col-md-6 mb-4">';
    $cardContent .= '<div class="card border-left-success shadow h-100 py-2">';
    $cardContent .= '<div class="card-body">';
    $cardContent .= '<div class="row no-gutters align-items-center">';
    $cardContent .= '<div class="col mr-2">';
    $cardContent .= '<div class="h5 mb-0 font-weight-bold text-gray-800">';
    $cardContent .= $cardValue;
    $cardContent .= '</div>';
    $cardContent .= '</div>';
    $cardContent .= '<div class="col-auto">';
    $cardContent .= '<i class="fas ';
    $cardContent .= $iconClass;
    $cardContent .= 'fa-2x text-gray-300"></i>';
    $cardContent .= '</div>';
    $cardContent .= '</div>';
    $cardContent .= '</div>';
    $cardContent .= '</div>';
    $cardContent .= '</div>';
return $cardContent;
}
