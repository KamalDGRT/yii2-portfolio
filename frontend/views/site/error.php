<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = $name;
$error_code = substr($name, -4, -1);
?>


<!-- ================ start banner Area ================= -->
<section class="banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 banner-right">
                <h1 class="text-white">
                    Error!!!
                </h1>
                <p class="mx-auto text-white  mt-20 mb-40">
                It looks like you found a glitch in the matrix...
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ================ End banner Area ================= -->


<div class="site-error">
    <div class="container-fluid">
        <div class="text-center mt-5">
            <div class="error mx-auto" data-text="<?php echo $error_code; ?>">
                <p class="m-0"><?php echo $error_code; ?></p>
            </div>
            <p class="text-dark mb-5 lead"><?= nl2br(Html::encode($message)) ?></p>
            <p class="text-black-50 mb-0">
                It looks like you found a glitch in the matrix...<br>
                <a href="<?php echo Url::to(['/site/index']) ?>"> Go Back! </a>
            </p>
        </div>
        <br><br><br>
        <p class="text-center">
            The above error occurred while the Web server was processing your request.
        </p>
        <p class="text-center">
            Please contact us if you think this is a server error. Thank you.
        </p>
    </div>
</div>
