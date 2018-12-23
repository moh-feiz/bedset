<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

Yii::$app->log->targets['debug'] = null;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!-- link for css  -->
    <link type="text/css" rel="stylesheet"
          href="<?= Yii::getAlias('@web') . '/materialize/css/materialize.css' ?>"/>
    <link type="text/css" rel="stylesheet"
          href="<?= Yii::getAlias('@web') . '/css/fontawesome-free-5.3.1-web/css/all.css' ?>"/>
    <link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@web') . '/css/layout/index.css' ?>"/>

    <!-- link for js----->
    <script src="<?= Yii::getAlias('@web') . '/js/jquery.min.js' ?>"></script>
    <script src="<?= Yii::getAlias('@web') . '/materialize/js/materialize.js' ?>"></script>
    <script src="<?= Yii::getAlias('@web') . '/js/layout/index.js' ?>"></script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- chat and top----->
<div>
    <div class="click-top">
        <a href="#top"><img src="<?= Yii::getAlias('@web' . '/image/top.jpeg') ?>" id="top-link"></a>
    </div>
</div>


<!-- Header -->

    <header class="row color-bg">
        <div class="col m4">
            <h1>arteta<span style="font-size: 20px">.com</span></h1>
        </div>
            <nav class="col m8 color-bg">
              <!-- navbar  -->
                <div class="nav-wrapper right">
                    <ul id="nav-mobile" class=" hide-on-med-and-down">
                        <?php
                        if (Yii::$app->user->isGuest) { ?>
                            <li><a href="<?= Url::toRoute('site/signup') ?>">Signup</a></li>
                        <?php }
                        ?>
                        <?php
                        if (Yii::$app->user->isGuest) { ?>
                            <li><a href="<?= Url::toRoute('site/login') ?>">Login</a></li>
                        <?php }
                        ?>


                        <li><a href="<?= Url::toRoute('site/about') ?>">About</a></li>
                        <li><a href="<?= Url::toRoute('site/contact') ?>">Contact</a></li>
                        <?php
                        if (!Yii::$app->user->isGuest) { ?>
                            <li><a href="<?= Url::toRoute('site/index') ?>">Home</a></li>
                            <li>
                                <form id="logout-form" action="<?= Url::toRoute('site/logout') ?>" method="post">
                                    <a class="logout-btn" href="#">Logout (<?= Yii::$app->user->identity->username ?>
                                        )</a></form>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>

            </nav>

        <!-- navbar  -->
        <!-- title and navbar -->
    </header>

    <!-- Header -->


<!-- Middle content from view -->
<div class="container">
<div class="row"> <?= $content ?></div>


</div>

<!-- Footer-->
<div class="container-fluid">
    <footer class="row color-bg">
        <!-- pic footer -->
        <div class="footer-copyright center social col m12">
            <div>
                <a target="_blank" href="#"><i class="fab fa-google-plus-g"></i></a>
                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div>
                © 2014 Copyright Text
            </div>
        </div>
       <!-- pic footer -->
    </footer>
</div><!-- Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

