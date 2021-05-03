<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
?>

<!-- ================ start banner Area ================= -->
<section class="banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 banner-right">
                <h1 class="text-white">
                    About Us
                </h1>
                <p class="mx-auto text-white  mt-20 mb-40">
                    We create templates for you guys!
                </p>
                <div class="link-nav">
                    <span class="box">
                        <?= Html::a('Home', ['/site/index']) ?>
                        <i class="lnr lnr-arrow-right"></i>
                        <?= Html::a('About', ['/site/about']) ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End banner Area ================= -->

<!-- ================ Start Feature Area ================= -->
<section class="feature-area">
    <div class="container-fluid">
        <div class="feature-inner row">
            <div class="col-lg-2 col-md-6">
                <div class="feature-item d-flex">
                    <i class="ti-book"></i>
                    <div class="ml-20">
                        <h4>New portfolio</h4>
                        <p>
                            Adding new portfolio every week!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="feature-item d-flex">
                    <i class="ti-cup"></i>
                    <div class="ml-20">
                        <h4>Top portfolio</h4>
                        <p>
                            Presenting Personal Portfolio, the solution to
                            all the times you want to have your personal
                            branding game at the top!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Feature Area ================= -->

<!-- ================- Start About Area ================= -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 about-left">
                <img class="img-fluid" src="https://i.imgur.com/dlJCMqk.jpg" alt="">
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-12 about-right">
                <h1>
                    Over all <br>
                    100+ templates
                </h1>
                <div>
                    <p>
                        Just kidding. We only have one for now. We will
                        add one each week!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================- End About Area ================= -->

<!-- ================ Start Feature Area ================= -->
<section class="other-feature-area">
    <div class="container">
        <div class="feature-inner row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <h2>
                        Features That <br />
                        Everyone Can Avail
                    </h2>
                    <p>

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="other-feature-item">
                    <i class="ti-key"></i>
                    <h4>Lifetime Access</h4>
                    <div>
                        <p>
                            All our templates are free for lifetime!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt--160">
                <div class="other-feature-item">
                    <i class="ti-crown"></i>
                    <h4>Personal portfolio template</h4>
                    <div>
                        <p>
                            Presenting Personal Portfolio, the solution to
                            all the times you want to have your personal
                            branding game at the top!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt--260">
                <div class="other-feature-item">
                    <i class="ti-headphone-alt"></i>
                    <h4>Techincal Support</h4>
                    <div>
                        <p>
                            Mail us anytime to get your queries answered!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Feature Area ================= -->
