<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'contactmobile';
$this->title = 'Контакты';
$this->params['breadcrumbs'][] = ['label' => 'Главная (моб)', 'url' => ['indexmobile']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact-mobile">
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
    <div class="contact-form-contact-mobile">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?= $form->field($model, 'name')
                ->textInput(['placeholder'=>'Имя', 'class' => 'contact-field-mobile'])
                ->label(false) ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?= $form->field($model, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '+38 (999) 999-99-99'])
                ->textInput(['placeholder'=>'Телефон', 'class' => 'contact-field-mobile']) ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?= $form->field($model, 'email')->label(false)
                ->textInput(['placeholder'=>'E-mail', 'class' => 'contact-field-mobile']) ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-contact-send-mobile', 'name' => 'contact-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div id="map-mobile"></div>
</div>
