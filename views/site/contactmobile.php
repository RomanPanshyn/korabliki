<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->context->layout = 'contactmobile';
$this->title = 'Контакты';
$this->params['breadcrumbs'][] = ['label' => 'Главная (моб)', 'url' => ['indexmobile']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact-mobile">

    <div class="services-mobile-blog">
        <div class="services-close-icon"></div>
        <a href="#">Турне</a>
        <a href="#">Вечеринка</a>
        <a href="#">День Рождения</a>
        <a href="#">Корпоратив</a>
        <a href="#">Свадьба</a>
        <a href="#">Прогулка по Днепру</a>
        <a href="#">Прогулка по Десне</a>
    </div>

    <div class="order">
        <div class="order-close-icon"></div>
        <div class="order-content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'ship')->dropdownList(['Cuba Libre'], ['prompt'=>'Выбрать теплоход',
                    'class' => 'application-form-input-mobile'])->label(false) ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'event')
                    ->dropdownList(['Турне','Вечеринка','День Рождения','Корпоратив','Свадьба','Прогулка'], ['prompt'=>'Мероприятие',
                    'class' => 'application-form-input-mobile'])->label(false) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'route')->dropdownList(['Днепр','Десна'], ['prompt'=>'Маршрут',
                    'class' => 'application-form-input-mobile'])->label(false) ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'guests')->dropdownList(['5','10','15','20'], ['prompt'=>'Количество гостей',
                    'class' => 'application-form-input-mobile'])->label(false) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input-mobile'])
                    ->label(false) ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                    <?= $form->field($modelBook, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99'])
                        ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input-mobile']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 label-date-mobile application-form-mobile">
                    с
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 application-form-mobile">
                    <?= $form->field($modelBook, 'datefrom')->label(false)->widget(DateTimePicker::className(), [
                        'name' => 'datetime_10',
                        'id' => 'datetimepicker1',
                        'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input-mobile'],
                        'language' => 'ru',
                        'type' => DateTimePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd/mm/yyyy hh:ii',
                        ]
                    ]) ?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 label-date-mobile application-form-mobile">
                    до
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 application-form">
                    <?= $form->field($modelBook, 'dateto')->label(false)->widget(DateTimePicker::className(), [
                        'name' => 'datetime_10',
                        'id' => 'datetimepicker2',
                        'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input-mobile'],
                        'language' => 'ru',
                        'type' => DateTimePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd/mm/yyyy hh:ii',
                        ]
                    ]) ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-form-mobile">
                <div class="form-group">
                    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-send-mobile', 'name' => 'send-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

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
