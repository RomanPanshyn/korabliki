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
<div class="layout-container-mobile">
    <div class="head-bg"></div>
    <div class="wrap-mobile">
        <?php
        NavBar::begin([
            'brandLabel' => '<div class="logo">ПАНСЬКА<br>ВТІХА</div>',
            'brandUrl' => ['/site/indexmobile'],
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top head-line',
                'style' => [
                'width' => '750px',
                'margin' => 'auto',
            ]],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right navigation-links', 'style' => [
            'margin-top' => '20px',
            'width' => '840px;',
            ]],
            'items' => [
                    ['label' => '<div class="desktop-icon"></div>',
                        'url' => ['/site/index'],
                        'options' => ['style' => [
                        'background-color' => '#0E5D72',
                        'font-size' => '19px',
                        'margin-top' => '-5px',
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
                    ['label' => '<div class="menu-labels">БЛОГ</div>', 'url' => ['/site/blogmobile'], 'options' => ['style' => [
                        'background-color' => '#0E5D72',
                        'font-size' => '19px',
                        ]]],
                    ['label' => '|', 'options' => ['style' => [
                        'margin-left' => '-10px',
                        'margin-right' => '-10px',
                        'font-size' => '19px',
                        ]]],
                    ['label' => '<div class="menu-labels">КОНТАКТЫ</div>', 'url' => ['/site/contactmobile'], 'options' => ['style' => [
                        'background-color' => '#0E5D72',
                        'font-size' => '19px',
                        ]]],
            ],
            'encodeLabels' => false,
        ]);
        NavBar::end();
        ?>
        <div class="container-mobile">
            <div class="more-photo-mobile">
                БОЛЬШЕ ФОТО
            </div>
            <div id="gallery-bg-mobile"></div>
            <div class="gallery-window-bg-mobile"></div>
            <div class="gallery-close-icon-mobile"></div>
            <div class="gallery-photo-mobile"></div>
            <div class="gallery-previous-mobile"></div>
            <div class="gallery-next-mobile"></div>

            <div class="gallery-icon-27-mobile"></div>
            <div class="gallery-icon-26-mobile"></div>
            <div class="gallery-icon-25-mobile"></div>
            <div class="gallery-icon-24-mobile"></div>
            <div class="gallery-icon-23-mobile"></div>
            <div class="gallery-icon-22-mobile"></div>
            <div class="gallery-icon-21-mobile"></div>
            <div class="gallery-icon-20-mobile"></div>
            <div class="gallery-icon-19-mobile"></div>
            <div class="gallery-icon-18-mobile"></div>
            <div class="gallery-icon-17-mobile"></div>
            <div class="gallery-icon-16-mobile"></div>
            <div class="gallery-icon-15-mobile"></div>
            <div class="gallery-icon-14-mobile"></div>
            <div class="gallery-icon-13-mobile"></div>
            <div class="gallery-icon-12-mobile"></div>
            <div class="gallery-icon-11-mobile"></div>
            <div class="gallery-icon-10-mobile"></div>
            <div class="gallery-icon-9-mobile"></div>
            <div class="gallery-icon-8-mobile"></div>
            <div class="gallery-icon-7-mobile"></div>
            <div class="gallery-icon-6-mobile"></div>
            <div class="gallery-icon-5-mobile"></div>
            <div class="gallery-icon-4-mobile"></div>
            <div class="gallery-icon-3-mobile"></div>
            <div class="gallery-icon-2-mobile"></div>
            <div class="gallery-icon-1-mobile"></div>
            <div class="gallery-icon0-mobile"></div>

            <div class="gallery-icon1-mobile"></div>
            <div class="gallery-icon2-mobile"></div>
            <div class="gallery-icon3-mobile"></div>
            <div class="gallery-icon4-mobile"></div>
            <div class="gallery-icon5-mobile"></div>

            <div class="gallery-icon6-mobile"></div>
            <div class="gallery-icon7-mobile"></div>
            <div class="gallery-icon8-mobile"></div>
            <div class="gallery-icon9-mobile"></div>
            <div class="gallery-icon10-mobile"></div>
            <div class="gallery-icon11-mobile"></div>
            <div class="gallery-icon12-mobile"></div>
            <div class="gallery-icon13-mobile"></div>
            <div class="gallery-icon14-mobile"></div>
            <div class="gallery-icon15-mobile"></div>
            <div class="gallery-icon16-mobile"></div>
            <div class="gallery-icon17-mobile"></div>
            <div class="gallery-icon18-mobile"></div>
            <div class="gallery-icon19-mobile"></div>
            <div class="gallery-icon20-mobile"></div>
            <div class="gallery-icon21-mobile"></div>
            <div class="gallery-icon22-mobile"></div>
            <div class="gallery-icon23-mobile"></div>
            <div class="gallery-icon24-mobile"></div>
            <div class="gallery-icon25-mobile"></div>
            <div class="gallery-icon26-mobile"></div>
            <div class="gallery-icon27-mobile"></div>
            <div class="gallery-icon28-mobile"></div>
            <div class="gallery-icon29-mobile"></div>
            <div class="gallery-icon30-mobile"></div>
            <div class="gallery-icon31-mobile"></div>
            <div class="gallery-icon32-mobile"></div>

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
        <div class="container-mobile">
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
