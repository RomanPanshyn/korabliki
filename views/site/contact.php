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
    <div class="contact-text">Оставьте заявку и мы вам перезвоним:</div>
    <div class="contact-form-new">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-3 col-md-3 col-sm-3 contact-name">
            <?= $form->field($model, 'name')
                ->textInput(['placeholder'=>'Имя', 'class' => 'form-contact'])
                ->label(false) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 contact-phone">
            <?= $form->field($model, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '+38 (999) 999-99-99'])
                ->textInput(['placeholder'=>'Телефон', 'class' => 'form-contact']) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 contact-email">
            <?= $form->field($model, 'email')->label(false)
                ->textInput(['placeholder'=>'E-mail', 'class' => 'form-contact']) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 contact-send">
            <div class="form-group">
                <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-contact-send-new', 'name' => 'contact-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div id="map"></div>
</div>
