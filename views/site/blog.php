<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Блог | Korabliki',
]);
$this->title = 'Блог | Korabliki';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-blog">
    <div class="message-blog">
        <?= $message ?>
    </div>

    <div class="order-blog">
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
    <div class="blog-space"></div>
    <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}\n{summary}\n{pager}",
                'pager' => ['options' => ['class' => 'pagination']],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item', ['model' => $model]);
                },
            ]) ?>
    <div class="blog-space"></div>
    <div class="blog-space"></div>
</div>