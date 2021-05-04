<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Dashboard';

function getAnchorContent($cardLabel, $iconClass, $borderLeftClass = 'border-left-danger')
{
    $anchorContent = '<div class="card shadow ' . $borderLeftClass . ' py-2"><div class="card-body">';
    $anchorContent .= '<div class="row align-items-center no-gutters"><div class="col mr-2">';
    $anchorContent .= '<div class="text-dark font-weight-bold h5 mb-0"><span>';
    $anchorContent .= $cardLabel;
    $anchorContent .= '</span></div>';
    $anchorContent .= '<div class="text-uppercase text-primary font-weight-bold text-xs mb-1"></div>';
    $anchorContent .= '</div><div class="col-auto"><i class="' . $iconClass . '"></i>';
    $anchorContent .= '</div></div></div></div>';
    return $anchorContent;
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">

    <!-- About Me -->
    <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "View Portfolio",
                    'far fa-address-card fa-2x text-danger-300',
                    'border-left-info'
                ),
                Url::to(['/theme/view', 'username' => Yii::$app->user->identity->username]),
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- About Me -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "About Me",
                    'far fa-address-card fa-2x text-danger-300'
                ),
                ['/aboutme/update/' . Yii::$app->user->identity->id],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Profile Picture -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Profile Picture",
                    'fas fa-user-circle fa-2x text-primary-300'
                ),
                ['/profilepic'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Education",
                    'fas fa-university fa-2x text-danger-300'
                ),
                ['/education'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Contact Details -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Contact Details",
                    'fas fa-address-book fa-2x text-primary-300'
                ),
                ['/contact/update/' . Yii::$app->user->identity->id],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Skills -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Skills",
                    'fas fa-certificate fa-2x text-primary-300'
                ),
                ['/skill'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Achievements -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Achievements",
                    'fas fa-star fa-2x text-primary-300'
                ),
                ['/achievement'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Company Details -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Company Details",
                    'fas fa-building fa-2x text-primary-300'
                ),
                ['/company/update/' . Yii::$app->user->identity->id],
                ['class' => 'a-card']
            )
            ?>
        </div>


        <!-- Work Experience -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Work Experience",
                    'fas fa-briefcase fa-2x text-primary-300'
                ),
                ['/experience'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Volunteer Experience -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Volunteer Experience",
                    'fas fa-hands-helping fa-2x text-primary-300'
                ),
                ['#'],
                ['class' => 'a-card']
            )
            ?>
        </div> -->


        <!-- Testimonials -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Testimonials",
                    'fab fa-slideshare fa-2x text-primary-300'
                ),
                ['/testimonial'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- Social Links -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "Social Links",
                    'fas fa-hashtag fa-2x text-primary-300'
                ),
                ['/social'],
                ['class' => 'a-card']
            )
            ?>
        </div>

        <!-- SEO Integration -->
        <div class="col-xl-3 col-md-6 mb-4">
            <?= Html::a(
                getAnchorContent(
                    "SEO Integration",
                    'fas fa-atlas fa-2x text-primary-300'
                ),
                ['/integration/update/' . Yii::$app->user->identity->id],
                ['class' => 'a-card']
            )
            ?>
        </div>

    </div>
</div>
