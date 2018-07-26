<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'contact';
$this->title = 'Контакты';
?>
<div class="site-contact">
    <br><br>
    <div class="contact-info">
        <?= Html::img('@web/images/locationiconred.png', ['alt' => 'location',
            'style' => ['width' => '22px', 'margin-bottom' => '10px']]) ?>
        МЕСТО СТОЯНКИ <span class="contact-bold">ЯХТ-КЛУБ "ФРЕГАТ"</span>
    </div>
    <div class="contact-info">
        <?= Html::img('@web/images/phoneiconred.png', ['alt' => 'phone',
            'style' => ['width' => '22px']]) ?>
        +38 <span class="contact-bold">(063) 495 06 22</span>
    </div>
    <br><br>
    <div><span class="contact-text">Оставьте заявку и мы вам перезвоним:</span></div>
    <div class="contact-form-details">
        <?php $form = ActiveForm::begin(); ?>
            <span class="application-form-contact-name">
                <?= $form->field($model, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input-contact'])
                ->label(false) ?>
            </span>
            <span class="application-form-contact-phone">
                <?= $form->field($model, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+38 (999) 999-99-99'])
                    ->textInput(['placeholder'=>'Телефон', 'class' => 'application-form-input-contact']) ?>
            </span>
            <span class="application-form-contact-email">
                <?= $form->field($model, 'email')->label(false)
                    ->textInput(['placeholder'=>'E-mail', 'class' => 'application-form-input-contact']) ?>
            </span>
            <span class="btn-contact-send-new">ОТПРАВИТЬ</span>

        <?php ActiveForm::end(); ?>
    </div>
    <br><br><br><br><br><br>
    <div id="map"></div>
    <script>
        function initMap() {
            var korabliki = {lat: 50.4465, lng: 30.582};
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 13, center: korabliki});
            var marker = new google.maps.Marker({position: korabliki, map: map, title: 'Яхт-клуб "Фрегат"'});
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRBg3UqNtKW8RtsaG1Ah1R4K2cBgcjM9U&callback=initMap">
    </script>
</div>
