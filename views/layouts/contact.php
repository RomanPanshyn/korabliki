<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\datetime\DateTimePicker;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="layout-contact">
    <div class="head-bg"></div>
    <div class="header-image-contact"></div>
    <div class="wrap-contact">
        <?php
        NavBar::begin([
            'brandLabel' => '<div class="logo">ПАНСЬКА<br>ВТІХА</div>',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top head-line',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right navigation-links', 'style' => [
            'margin-top' => '20px']],
            'items' => [
                ['label' => 'БЛОГ', 'url' => ['/site/blog'], 'options' => ['style' => [
                    'font-size' => '19px',
                    ]]],
                ['label' => '|', 'options' => ['style' => [
                    'margin-left' => '-10px',
                    'margin-right' => '-10px',
                    'font-size' => '19px',
                    ]]],
                ['label' => 'КОНТАКТЫ', 'url' => ['/site/contact'], 'options' => ['style' => [
                    'font-size' => '19px',
                    ]]],
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container-contact">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer-contact">
    <div class="footer-bg">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 logo-bottom">
                ПАНСЬКА<br>ВТІХА
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-footer">
                <?= Html::img('@web/images/phoneicon.png', ['alt' => 'phone',
                    'style' => ['width' => '22px']]) ?>
                +38 <b>(063)</b> 495 06 22
                <br>
                <?= Html::img('@web/images/locationicon.png', ['alt' => 'location',
                    'style' => ['width' => '22px', 'margin-bottom' => '10px']]) ?>
                Место стоянки Яхт-клуб "Фрегат"
            </div>
        </div>
    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
