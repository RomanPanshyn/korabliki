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
<div class="layout-container">
    <div class="head-bg"></div>
    <div class="ship-image" id="idship-image"></div>
    <div class="container">
        <div id="gallery-bg"></div>
        <div class="gallery-window-bg"></div>
        <div class="gallery-close-icon"></div>
        <div class="gallery-photo"></div>
        <div class="gallery-previous"></div>
        <div class="gallery-next"></div>

        <div class="gallery-icon-27"></div>
        <div class="gallery-icon-26"></div>
        <div class="gallery-icon-25"></div>
        <div class="gallery-icon-24"></div>
        <div class="gallery-icon-23"></div>
        <div class="gallery-icon-22"></div>
        <div class="gallery-icon-21"></div>
        <div class="gallery-icon-20"></div>
        <div class="gallery-icon-19"></div>
        <div class="gallery-icon-18"></div>
        <div class="gallery-icon-17"></div>
        <div class="gallery-icon-16"></div>
        <div class="gallery-icon-15"></div>
        <div class="gallery-icon-14"></div>
        <div class="gallery-icon-13"></div>
        <div class="gallery-icon-12"></div>
        <div class="gallery-icon-11"></div>
        <div class="gallery-icon-10"></div>
        <div class="gallery-icon-9"></div>
        <div class="gallery-icon-8"></div>
        <div class="gallery-icon-7"></div>
        <div class="gallery-icon-6"></div>
        <div class="gallery-icon-5"></div>
        <div class="gallery-icon-4"></div>
        <div class="gallery-icon-3"></div>
        <div class="gallery-icon-2"></div>
        <div class="gallery-icon-1"></div>
        <div class="gallery-icon0"></div>

        <div class="gallery-icon1"></div>
        <div class="gallery-icon2"></div>
        <div class="gallery-icon3"></div>
        <div class="gallery-icon4"></div>
        <div class="gallery-icon5"></div>

        <div class="gallery-icon6"></div>
        <div class="gallery-icon7"></div>
        <div class="gallery-icon8"></div>
        <div class="gallery-icon9"></div>
        <div class="gallery-icon10"></div>
        <div class="gallery-icon11"></div>
        <div class="gallery-icon12"></div>
        <div class="gallery-icon13"></div>
        <div class="gallery-icon14"></div>
        <div class="gallery-icon15"></div>
        <div class="gallery-icon16"></div>
        <div class="gallery-icon17"></div>
        <div class="gallery-icon18"></div>
        <div class="gallery-icon19"></div>
        <div class="gallery-icon20"></div>
        <div class="gallery-icon21"></div>
        <div class="gallery-icon22"></div>
        <div class="gallery-icon23"></div>
        <div class="gallery-icon24"></div>
        <div class="gallery-icon25"></div>
        <div class="gallery-icon26"></div>
        <div class="gallery-icon27"></div>
        <div class="gallery-icon28"></div>
        <div class="gallery-icon29"></div>
        <div class="gallery-icon30"></div>
        <div class="gallery-icon31"></div>
        <div class="gallery-icon32"></div>
    </div>
    <div class="characteristic-bg"></div>
    <div class="wrap">
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
                ['label' => '<div class="menu-labels">МОБИЛЬНАЯ ВЕРСИЯ</div>',
                    'url' => ['/site/indexmobile'],
                    'options' => ['style' => [
                    'background-color' => '#0E5D72',
                    'font-size' => '19px',
                ]]],
                ['label' => '|', 'options' => ['style' => [
                    'margin-left' => '-10px',
                    'margin-right' => '-10px',
                    'font-size' => '19px',
                    ]]],
                ['label' => '<div class="menu-labels">ЗАКАЗАТЬ</div>',
                    // 'url' => ['/site/index'],
                    'options' => [
                    'class' => 'menu-order',
                    'style' => [
                    'background-color' => '#0E5D72',
                    'font-size' => '19px',
                    ]]],
                ['label' => '|', 'options' => ['style' => [
                    'margin-left' => '-10px',
                    'margin-right' => '-10px',
                    'font-size' => '19px',
                    ]]],
                ['label' => '<div class="menu-labels">УСЛУГИ</div>',
                    // 'url' => ['/site/index'],
                    'options' => [
                    'class' => 'menu-services',
                    'style' => [
                    'background-color' => '#0E5D72',
                    'font-size' => '19px',
                    ]]],
                ['label' => '|', 'options' => ['style' => [
                    'margin-left' => '-10px',
                    'margin-right' => '-10px',
                    'font-size' => '19px',
                    ]]],
                ['label' => '<div class="menu-labels">БЛОГ</div>', 'url' => ['/site/blog'], 'options' => ['style' => [
                    'background-color' => '#0E5D72',
                    'font-size' => '19px',
                    ]]],
                ['label' => '|', 'options' => ['style' => [
                    'margin-left' => '-10px',
                    'margin-right' => '-10px',
                    'font-size' => '19px',
                    ]]],
                ['label' => '<div class="menu-labels">КОНТАКТЫ</div>', 'url' => ['/site/contact'], 'options' => ['style' => [
                    'background-color' => '#0E5D72',
                    'font-size' => '19px',
                    ]]],
            ],
            'encodeLabels' => false,
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <div class="more-photo">
                БОЛЬШЕ ФОТО
            </div>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
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
    <div class="footer-image"></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
