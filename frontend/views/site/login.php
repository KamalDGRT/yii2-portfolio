<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';

?>
<style>
    fieldset {
        background: #ffffff;
        border: 1px solid #e6e8e8;
        border-radius: 5px;
        margin: 20px 0 20px 0;
        padding: 25px;
        position: relative;
    }

    fieldset .form-group {
        margin-left: 0;
        margin-right: 0;
    }

    fieldset legend {
        background: inherit;
        font-family: "Lato", sans-serif;
        color: #007AFF;
        font-size: 15px;
        left: 10px;
        padding: 0 10px;
        position: absolute;
        top: -12px;
        font-weight: 400;
        width: auto !important;
        border: none !important;
    }

    legend {
        color: inherit;
        font-size: 16px;
        font-weight: 300;
    }

    span.input-icon,
    span.input-help {
        display: block;
        position: relative;
    }

    .input-icon>input {
        padding-left: 30px !important;
        padding-right: 6px;
    }

    .input-icon.input-icon-right>input {
        padding-left: 6px !important;
        padding-right: 30px !important;
    }

    span.input-help>input {
        padding-left: 30px;
        padding-right: 6px;
    }

    .input-icon>[class*="fa-"],
    .input-icon>[class*="ti-"] {
        bottom: 0;
        color: #007AFF;
        display: inline-block;
        left: 5px;
        line-height: 35px;
        padding: 0 3px;
        position: absolute;
        top: 2px;
        z-index: 2;
    }

    .input-icon.input-icon-right>[class*="fa-"],
    .input-icon.input-icon-right>[class*="ti-"] {
        left: auto;
        right: 4px;
    }

    .form-control {
        border-radius: 0;
    }
</style>


<!-- ================ start banner Area ================= -->
<section class="banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 banner-right">
                <h1 class="text-white">
                    LogIn
                </h1>
                <p class="mx-auto text-white  mt-20 mb-40">
                    Sign in to go to your profile!
                </p>
                <div class="link-nav">
                    <span class="box">
                        <?= Html::a('Home', ['/site/index']) ?>
                        <i class="lnr lnr-arrow-right"></i>
                        <?= Html::a('LogIn', ['/site/login']) ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End banner Area ================= -->


<!-- ================- Start About Area ================= -->
<section class="about-area section-gap">

    <div class="row align-items-center justify-content-center">

        <main class="page contact-us-page">
            <section class="clean-block clean-form dark">
                <div class="container-fluid">
                    <div class="block-heading">

                    </div>
                    <?php $form = ActiveForm::begin(['class' => 'form-login']); ?>
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your email and password to log in.<br />
                            <span style="color:red;">
                            </span>
                        </p>

                        <div class="form-group">
                            <?= $form->field($model, 'username')
                                ->textInput([
                                    'autofocus' => true
                                ])
                            ?>
                        </div>

                        <div class="form-group form-actions">
                            <?= $form->field($model, 'password')
                                ->passwordInput()
                            ?>
                        </div>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <div class="form-actions">
                            <?= Html::submitButton(
                                'Log-In <i class="fa fa-arrow-circle-right"></i>',
                                [
                                    'class' => 'btn btn-primary btn-block',
                                    'name' => 'login-button'
                                ]
                            )
                            ?>

                        </div><br><br>
                        <div class="new-account">
                            Don't have an account yet?
                            <li><?= Html::a('Create an Account!', ['/site/signup']) ?></li>
                        </div>
                    </fieldset>
                    <?php ActiveForm::end(); ?>

                </div>
            </section>
        </main>

    </div>

</section>
<!-- ================- End About Area ================= -->
