<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\NormalAsset;

NormalAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>

<body id="page-top">
    <?php $this->beginBody() ?>

    <div id="wrapper">

        <?php        
            echo $this->render('_sidebar');
        ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php echo $this->render('_header') ?>
                <div class="container-fluid text-dark">

                    <?= Alert::widget() ?>
                    <?= $content ?>

                </div>
            </div>

            <?php echo $this->render('_footer') ?>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
