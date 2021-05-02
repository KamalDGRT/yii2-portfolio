<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$error_code = substr($name, -4, -1);
?>
<div class="site-error">
    <div class="container-fluid">
        <div class="text-center mt-5">
            <div class="error mx-auto" data-text="<?php echo $error_code; ?>">
                <p class="m-0"><?php echo $error_code; ?></p>
            </div>
            <p class="text-dark mb-5 lead"><?= nl2br(Html::encode($message)) ?></p>
            <p class="text-black-50 mb-0">It looks like you found a glitch in the matrix...</p>
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
