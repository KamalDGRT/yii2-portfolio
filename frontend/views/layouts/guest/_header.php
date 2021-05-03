<?php

use yii\helpers\Html;
?>

<header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <?= Html::a(
                'Portfolio',
                ['/site/index'],
                [
                    'class' => 'navbar-brand',
                    'style' => 'color: yellow; font-weight: bold;'
                ]
            )
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><?= Html::a('Home', ['/site/index'])?></li>
                    <li><?= Html::a('About', ['/site/about'])?></li>
                    <li><?= Html::a('Login', ['/site/login'])?></li>
                    <li><?= Html::a('Sign Up', ['/site/signup'])?></li>
                    <li><?= Html::a('Contact Us', ['/site/contact'])?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
