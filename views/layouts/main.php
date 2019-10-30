<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/favicon.ico">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150555775-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-150555775-1');
    </script>

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<?php $this->beginBody() ?>
<!-- Preloader -->
<!--
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>--><!--End off Preloader -->


<div class="culmn" id="start">
    <!--Home page style-->
    <nav class="navbar navbar-default navbar-fixed bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="glyphicon glyphicon-align-justify"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.jpg" class="logo mlogo" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') {
                        ?>
                        <li><a href="#block-7">Beschreibung</a></li>
                        <li><a href="#block-5">Garantiertes Ergebnis</a></li>
                        <li><a href="#sp">Zahlung und Lieferung</a></li>
                        <li><a href="#!" data-toggle="modal" data-target="#order-modal">Bestellung aufgeben</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="">&nbsp;</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>



    <?= $content ?>


    <!-- scroll up-->
    <div class="scrollup">
        <a href="#start"><i class="glyphicon glyphicon-chevron-up"></i></a>
    </div><!-- End off scroll up -->


    <footer id="footer" class="footer m-top-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3 f-logo-con">
                    <img src="/images/logo.png" class="flogo" alt="">
                </div>
                <div class="col-md-3">
                    <p class=" head3">KAUFEN</p>
                    <p class="text-def">+ 43 6606368677</p>
                    <p class="text-def footer-mail">maldives.dreamstm@gmail.com</p>
                </div>
                <div class="col-md-3">
                    <p class=" head3">ÜBER UNS</p>
                    <p class="text-def">Yena GmbH Jakoberstrasse 4 1010 Wien</p>
                </div>
                <div class="col-md-3">
                    <p class="head3">DOKUMENTATION</p>
                    <p class="text-def"><a href="/#block-9">Europäische Qualitätsstandards</a></p>
                </div>
                <div class="f-logo-con-2">
                    <img src="/images/logo.png" class="flogo2" alt="">
                </div>
                <div class="col-md-12" style="text-align: center;">
                    <img src="/images/visa.webp" class="flvisa" alt="">
                    <img src="/images/mc.webp" class="flmc" alt="">
                </div>
                <div class="col-md-12 text-center m-bottom-20">
                    <p class="text-def">Maldives dreams 2019 Alle Rechte vorbehalten</p>
                </div>
            </div>
        </div>
    </footer>




</div>
<!--Google Font link-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '450765688891742');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=450765688891742&ev=PageView&noscript=1" alt=""
    /></noscript>
<!-- End Facebook Pixel Code -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
