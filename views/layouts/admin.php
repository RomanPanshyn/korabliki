<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
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
    <?php $this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../web/favicon.ico',
    ]);?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="head-bg">
        <div class="container">
            <div class="head-grid">
                <div class="logo"><?= Html::a('CUBA<br>LIBRE', ['/site/admin']); ?></div>
                <div class="head-menu-area">
                    <ul class="head-line">
                        <li class="menu-phone"><?= Html::img('@web/images/phoneicon.png', ['alt' => 'phone', 'style' => ['width' => '22px', 'margin-right' => '7px']]) ?>
                            +38 (063) 495 06 22
                        </li>
                        <li class="menu-labels-highlight menu-blog"><?= Html::a('ЗАКАЗЫ', ['site/admin']); ?></li>
                        <li class="menu-labels-highlight menu-blog"><?= Html::a('БЛОГ', ['/site/adminblog']); ?></li>
                        <li class="menu-labels-highlight menu-blog"><?= Html::a('УСЛУГИ', ['/site/adminservices']); ?></li>
                        <li class="menu-labels-highlight menu-blog"><?= Html::a('ВЫЙТИ', ['site/logout'], ['data' => ['method' => 'post']]) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="footer-bg">
        <div class="container">
            <ul class="footer-service-area">
                <li><?= Html::a('Главная', Url::to(['site/index'])) ?></li>
                <li><?= Html::a('Прогулки&nbsp;по&nbsp;Днепру', Url::to(['site/progulka-na-teplohode'])) ?></li>
                <li><?= Html::a('Вечеринка', Url::to(['site/vecherinka-na-teplohode'])) ?></li>
                <li><?= Html::a('День&nbsp;рождения', Url::to(['site/den-rozhdenia-na-teplohode'])) ?></li>
                <li><?= Html::a('Банкет&nbsp;/&nbsp;Фуршет', Url::to(['site/banket-na-teplohode'])) ?></li>
                <li><?= Html::a('Корпоратив', Url::to(['site/korporativ-na-teplohode'])) ?></li>
                <li><?= Html::a('Свадьба', Url::to(['site/svadba-na-teplohode'])) ?></li>
            </ul>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo-bottom">
                CUBA<br>LIBRE
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 contact-footer">
                Аренда теплохода у судовладельца без посредников.<br>
                Работаем без выходных
                <?= Html::img('@web/images/phoneicon.png', ['alt' => 'phone',
                    'style' => ['width' => '22px']]) ?>
                +38 (063) 495 06 22
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