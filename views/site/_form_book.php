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

    <?= $form->field($model, 'datefrom')->widget(DateTimePicker::className(), [
        'name' => 'datetime_10',
        'id' => 'datetimepicker1',
        'options' => ['placeholder' => '__/__/____ __:__'],
        'language' => 'ru',
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd/mm/yyyy hh:ii',
        ]
    ]) ?>

    <?= $form->field($model, 'dateto')->widget(DateTimePicker::className(), [
        'name' => 'datetime_10',
        'id' => 'datetimepicker2',
        'options' => ['placeholder' => '__/__/____ __:__'],
        'language' => 'ru',
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd/mm/yyyy hh:ii',
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
