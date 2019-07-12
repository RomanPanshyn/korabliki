<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form-update">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['readonly' => 'true']) ?>

    <?= $form->field($model, 'ship')->dropdownList(ArrayHelper::map($ship, 'name', 'name')) ?>

    <?= $form->field($model, 'route')->dropdownList(ArrayHelper::map($route, 'name', 'name')) ?>

    <?= $form->field($model, 'event')->dropdownList(ArrayHelper::map($event, 'name', 'name')) ?>

    <?= $form->field($model, 'guests')->dropdownList(ArrayHelper::map($guests, 'name', 'name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '+38 (999) 999-99-99'])->textInput(['placeholder'=>'+38 (___) ___-__-__']) ?>

    <?= $form->field($model, 'bookdate')->widget(DateTimePicker::className(), [
        'name' => 'datetime_10',
        'readonly' => true,
        'options' => ['placeholder' => '__/__/____'],
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
                    $('.book-time-admin').css('display', 'block');
                 }",
        ],
    ]) ?>

    <?= $form->field($model, 'booktime')->textInput(['id' => 'book-time3', 'readonly'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="book-time-admin">
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-continue-admin">ПРОДОЛЖИТЬ</div>
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
