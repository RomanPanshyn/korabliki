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
        <div class="gallery-icon-27-bg"></div>
        <div class="gallery-icon-27-magnifier"></div>
        <div class="gallery-icon-26"></div>
        <div class="gallery-icon-26-bg"></div>
        <div class="gallery-icon-26-magnifier"></div>
        <div class="gallery-icon-25"></div>
        <div class="gallery-icon-25-bg"></div>
        <div class="gallery-icon-25-magnifier"></div>
        <div class="gallery-icon-24"></div>
        <div class="gallery-icon-24-bg"></div>
        <div class="gallery-icon-24-magnifier"></div>
        <div class="gallery-icon-23"></div>
        <div class="gallery-icon-23-bg"></div>
        <div class="gallery-icon-23-magnifier"></div>
        <div class="gallery-icon-22"></div>
        <div class="gallery-icon-22-bg"></div>
        <div class="gallery-icon-22-magnifier"></div>
        <div class="gallery-icon-21"></div>
        <div class="gallery-icon-21-bg"></div>
        <div class="gallery-icon-21-magnifier"></div>
        <div class="gallery-icon-20"></div>
        <div class="gallery-icon-20-bg"></div>
        <div class="gallery-icon-20-magnifier"></div>
        <div class="gallery-icon-19"></div>
        <div class="gallery-icon-19-bg"></div>
        <div class="gallery-icon-19-magnifier"></div>
        <div class="gallery-icon-18"></div>
        <div class="gallery-icon-18-bg"></div>
        <div class="gallery-icon-18-magnifier"></div>
        <div class="gallery-icon-17"></div>
        <div class="gallery-icon-17-bg"></div>
        <div class="gallery-icon-17-magnifier"></div>
        <div class="gallery-icon-16"></div>
        <div class="gallery-icon-16-bg"></div>
        <div class="gallery-icon-16-magnifier"></div>
        <div class="gallery-icon-15"></div>
        <div class="gallery-icon-15-bg"></div>
        <div class="gallery-icon-15-magnifier"></div>
        <div class="gallery-icon-14"></div>
        <div class="gallery-icon-14-bg"></div>
        <div class="gallery-icon-14-magnifier"></div>
        <div class="gallery-icon-13"></div>
        <div class="gallery-icon-13-bg"></div>
        <div class="gallery-icon-13-magnifier"></div>
        <div class="gallery-icon-12"></div>
        <div class="gallery-icon-12-bg"></div>
        <div class="gallery-icon-12-magnifier"></div>
        <div class="gallery-icon-11"></div>
        <div class="gallery-icon-11-bg"></div>
        <div class="gallery-icon-11-magnifier"></div>
        <div class="gallery-icon-10"></div>
        <div class="gallery-icon-10-bg"></div>
        <div class="gallery-icon-10-magnifier"></div>
        <div class="gallery-icon-9"></div>
        <div class="gallery-icon-9-bg"></div>
        <div class="gallery-icon-9-magnifier"></div>
        <div class="gallery-icon-8"></div>
        <div class="gallery-icon-8-bg"></div>
        <div class="gallery-icon-8-magnifier"></div>
        <div class="gallery-icon-7"></div>
        <div class="gallery-icon-7-bg"></div>
        <div class="gallery-icon-7-magnifier"></div>
        <div class="gallery-icon-6"></div>
        <div class="gallery-icon-6-bg"></div>
        <div class="gallery-icon-6-magnifier"></div>
        <div class="gallery-icon-5"></div>
        <div class="gallery-icon-5-bg"></div>
        <div class="gallery-icon-5-magnifier"></div>
        <div class="gallery-icon-4"></div>
        <div class="gallery-icon-4-bg"></div>
        <div class="gallery-icon-4-magnifier"></div>
        <div class="gallery-icon-3"></div>
        <div class="gallery-icon-3-bg"></div>
        <div class="gallery-icon-3-magnifier"></div>
        <div class="gallery-icon-2"></div>
        <div class="gallery-icon-2-bg"></div>
        <div class="gallery-icon-2-magnifier"></div>
        <div class="gallery-icon-1"></div>
        <div class="gallery-icon-1-bg"></div>
        <div class="gallery-icon-1-magnifier"></div>
        <div class="gallery-icon0"></div>
        <div class="gallery-icon0-bg"></div>
        <div class="gallery-icon0-magnifier"></div>

        <div class="gallery-icon1"></div>
        <div class="gallery-icon1-bg"></div>
        <div class="gallery-icon1-magnifier"></div>
        <div class="gallery-icon2"></div>
        <div class="gallery-icon2-bg"></div>
        <div class="gallery-icon2-magnifier"></div>
        <div class="gallery-icon3"></div>
        <div class="gallery-icon3-bg"></div>
        <div class="gallery-icon3-magnifier"></div>
        <div class="gallery-icon4"></div>
        <div class="gallery-icon4-bg"></div>
        <div class="gallery-icon4-magnifier"></div>
        <div class="gallery-icon5"></div>
        <div class="gallery-icon5-bg"></div>
        <div class="gallery-icon5-magnifier"></div>

        <div class="gallery-icon6"></div>
        <div class="gallery-icon6-bg"></div>
        <div class="gallery-icon6-magnifier"></div>
        <div class="gallery-icon7"></div>
        <div class="gallery-icon7-bg"></div>
        <div class="gallery-icon7-magnifier"></div>
        <div class="gallery-icon8"></div>
        <div class="gallery-icon8-bg"></div>
        <div class="gallery-icon8-magnifier"></div>
        <div class="gallery-icon9"></div>
        <div class="gallery-icon9-bg"></div>
        <div class="gallery-icon9-magnifier"></div>
        <div class="gallery-icon10"></div>
        <div class="gallery-icon10-bg"></div>
        <div class="gallery-icon10-magnifier"></div>
        <div class="gallery-icon11"></div>
        <div class="gallery-icon11-bg"></div>
        <div class="gallery-icon11-magnifier"></div>
        <div class="gallery-icon12"></div>
        <div class="gallery-icon12-bg"></div>
        <div class="gallery-icon12-magnifier"></div>
        <div class="gallery-icon13"></div>
        <div class="gallery-icon13-bg"></div>
        <div class="gallery-icon13-magnifier"></div>
        <div class="gallery-icon14"></div>
        <div class="gallery-icon14-bg"></div>
        <div class="gallery-icon14-magnifier"></div>
        <div class="gallery-icon15"></div>
        <div class="gallery-icon15-bg"></div>
        <div class="gallery-icon15-magnifier"></div>
        <div class="gallery-icon16"></div>
        <div class="gallery-icon16-bg"></div>
        <div class="gallery-icon16-magnifier"></div>
        <div class="gallery-icon17"></div>
        <div class="gallery-icon17-bg"></div>
        <div class="gallery-icon17-magnifier"></div>
        <div class="gallery-icon18"></div>
        <div class="gallery-icon18-bg"></div>
        <div class="gallery-icon18-magnifier"></div>
        <div class="gallery-icon19"></div>
        <div class="gallery-icon19-bg"></div>
        <div class="gallery-icon19-magnifier"></div>
        <div class="gallery-icon20"></div>
        <div class="gallery-icon20-bg"></div>
        <div class="gallery-icon20-magnifier"></div>
        <div class="gallery-icon21"></div>
        <div class="gallery-icon21-bg"></div>
        <div class="gallery-icon21-magnifier"></div>
        <div class="gallery-icon22"></div>
        <div class="gallery-icon22-bg"></div>
        <div class="gallery-icon22-magnifier"></div>
        <div class="gallery-icon23"></div>
        <div class="gallery-icon23-bg"></div>
        <div class="gallery-icon23-magnifier"></div>
        <div class="gallery-icon24"></div>
        <div class="gallery-icon24-bg"></div>
        <div class="gallery-icon24-magnifier"></div>
        <div class="gallery-icon25"></div>
        <div class="gallery-icon25-bg"></div>
        <div class="gallery-icon25-magnifier"></div>
        <div class="gallery-icon26"></div>
        <div class="gallery-icon26-bg"></div>
        <div class="gallery-icon26-magnifier"></div>
        <div class="gallery-icon27"></div>
        <div class="gallery-icon27-bg"></div>
        <div class="gallery-icon27-magnifier"></div>
        <div class="gallery-icon28"></div>
        <div class="gallery-icon28-bg"></div>
        <div class="gallery-icon28-magnifier"></div>
        <div class="gallery-icon29"></div>
        <div class="gallery-icon29-bg"></div>
        <div class="gallery-icon29-magnifier"></div>
        <div class="gallery-icon30"></div>
        <div class="gallery-icon30-bg"></div>
        <div class="gallery-icon30-magnifier"></div>
        <div class="gallery-icon31"></div>
        <div class="gallery-icon31-bg"></div>
        <div class="gallery-icon31-magnifier"></div>
        <div class="gallery-icon32"></div>
        <div class="gallery-icon32-bg"></div>
        <div class="gallery-icon32-magnifier"></div>

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
