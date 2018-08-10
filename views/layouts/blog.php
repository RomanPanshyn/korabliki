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
<div class="layout-blog">
    <div class="head-bg"></div>
    <div class="header-image-blog"></div>
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
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer-blog">
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
