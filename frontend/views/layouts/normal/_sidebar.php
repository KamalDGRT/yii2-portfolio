<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo Url::to(['/site/index']) ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-business-time"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Portfolio</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo Url::to(['/site/index']) ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="far fa-address-card"></i>
            <span>Profile</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?= Html::a(
                    'About Me',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Profile Picture',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Education',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Contact Details',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Skills',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Achievements',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Company Details',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Work Experience',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'Testimonials',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>


                <?= Html::a(
                    'Social Links',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

                <?= Html::a(
                    'SEO Integrations',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>

            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User stuff
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?= Html::a(
                    'Change Password',
                    '#',
                    ['class' => 'collapse-item']
                )
                ?>
            </div>
        </div>
    </li>

    <!-- Log out -->
    <li class="nav-item" role="presentation">
        <?= Html::a(
            '<i class="fas fa-sign-out-alt"></i>&nbsp;Logout',
            ['/site/logout'],
            [
                'class' => 'nav-link',
                'data-method' => 'post'
            ]
        )
        ?>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->