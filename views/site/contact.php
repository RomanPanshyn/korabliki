<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Наши контакты | Korabliki',
]);
$this->title = 'Наши контакты | Korabliki';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="message-blog">
        <?= $message ?>
    </div>

    <div class="order-contact">
        <div class="order-close-icon"></div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="order-container">
            <div class="application-form">
                <?= $form->field($modelBook, 'ship')->dropdownList(ArrayHelper::map($ship, 'name', 'name'), ['prompt'=>'Выбрать теплоход',
                    'class' => 'application-form-input'])->label(false) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'event')
                    ->dropdownList(ArrayHelper::map($event, 'name', 'name'), ['prompt'=>'Мероприятие',
                        'class' => 'application-form-input'])->label(false) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'route')->dropdownList(ArrayHelper::map($route, 'name', 'name'), ['prompt'=>'Маршрут',
                    'class' => 'application-form-input'])->label(false) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'guests')->dropdownList(ArrayHelper::map($guests, 'name', 'name'), ['prompt'=>'Количество гостей',
                    'class' => 'application-form-input'])->label(false) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input'])
                    ->label(false) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+38 (999) 999-99-99'])
                    ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input']) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'bookdate')->label(false)->widget(DateTimePicker::className(), [
                    'name' => 'datetime_10',
                    'readonly' => true,
                    'options' => ['placeholder' => '__/__/____', 'class' => 'application-form-input'],
                    'language' => 'ru',
                    'type' => DateTimePicker::TYPE_INPUT,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy',
                        'minView' => 2,
                        'maxView' => 2,
                    ],
                    'pluginEvents' => [
                        "changeDate" => "function(e) {  
                    let seldate = $('input[name=bookdates]').val().split(';');
                    let seltime = $('input[name=booktimes]').val().split(';');
                    $('.schedule-time1 input:checkbox').each(function() {
                        $(this).parent().css('color', 'black');
                        $(this).attr('disabled', false);
                        $(this).prop('checked', false);   
                    });
                    $('.schedule-time2 input:checkbox').each(function() {
                        $(this).parent().css('color', 'black');
                        $(this).attr('disabled', false);
                        $(this).prop('checked', false);   
                    });
                    for (let i = 0; i < seldate.length; i++)
                    { 
                        if ($.inArray($('#book-bookdate').val(), seldate, i) == i)
                        {
                            let eachtime = seltime[$.inArray($('#book-bookdate').val(), seldate, i)].split(',');
                            $('.schedule-time1 input:checkbox').each(function() {
                                if ($.inArray(this.value.slice(0, -3), eachtime) != -1)
                                {
                                    $(this).parent().css('color', 'silver');
                                    $(this).attr('disabled', 'disabled');
                                }
                            });
                            $('.schedule-time2 input:checkbox').each(function() {
                                if ($.inArray(this.value.slice(0, -3), eachtime) != -1)
                                {
                                    $(this).parent().css('color', 'silver');
                                    $(this).attr('disabled', 'disabled');
                                }
                            });
                        }
                    }
                    $('.book-time-order').css('display', 'block');
                 }",
                    ],
                ]) ?>
            </div>
            <div class="application-form">
                <?= $form->field($modelBook, 'booktime')->textInput(['id' => 'book-time1', 'class' => 'application-form-input', 'readonly'=>true])
                    ->label(false)?>
            </div>
            <div class="application-form">
                <div class="form-group">
                    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-send', 'name' => 'send-button']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="book-time-order">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <?= Html::checkboxList('', null, ArrayHelper::map($schedule1, 'time', 'time'),
                        ['class' => 'schedule-time1'])?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <?= Html::checkboxList('', null, ArrayHelper::map($schedule2, 'time', 'time'),
                        ['class' => 'schedule-time2'])?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-continue-order">ПРОДОЛЖИТЬ</div>
            </div>
            <?php $bookDates = '';
            $bookTimes = '';
            for ($i = 0; $i < count($bookRecord); $i++) {
                $bookDates .= $bookRecord[$i]->bookdate.';';
                $bookTimes .= $bookRecord[$i]->booktime.';';
            } ?>
            <?= Html::hiddenInput('bookdates', $bookDates); ?>
            <?= Html::hiddenInput('booktimes', $bookTimes); ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <div class="contact-block">
        <div>
            <?= Html::img('@web/images/locationiconred.png', ['alt' => 'location',
                'style' => ['width' => '22px', 'margin-bottom' => '10px']]) ?>
            МЕСТО СТОЯНКИ <span class="contact-bold">ЯХТ-КЛУБ "ФРЕГАТ"</span>
        </div>
        <div>
            <?= Html::img('@web/images/phoneiconred.png', ['alt' => 'phone',
                'style' => ['width' => '22px']]) ?>
            +38 (063) 495 06 22
        </div>
    </div>
    <div class="contact-text">Оставьте заявку и мы вам перезвоним:</div>
    <?php $form = ActiveForm::begin(); ?>
    <div class="contact-form-new">
        <div class="contact-grid">
            <div class="contact-form-field">
                <?= $form->field($modelContact, 'name')
                    ->textInput(['placeholder'=>'Имя', 'class' => 'contact-form-input'])
                    ->label(false) ?>
            </div>
            <div class="contact-form-field">
                <?= $form->field($modelContact, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+38 (999) 999-99-99'])
                    ->textInput(['placeholder'=>'Телефон', 'class' => 'contact-form-input']) ?>
            </div>
            <div class="contact-form-field">
                <?= $form->field($modelContact, 'email')->label(false)
                    ->textInput(['placeholder'=>'E-mail', 'class' => 'contact-form-input']) ?>
            </div>
            <div class="contact-form-field form-group">
                <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-contact-send-new', 'name' => 'contact-button']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <div id="map"></div>
</div>
