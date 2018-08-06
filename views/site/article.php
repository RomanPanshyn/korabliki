<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->context->layout = 'article';
$this->title = 'Статья';
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['blog']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-article">

    <div class="services">
        <div class="services-close-icon"></div>
        <?php
        $serviceList =ArrayHelper::map($service, 'id', 'name');
        for ($i = 1; $i <= count($serviceList); $i++) {
            echo '<a href="#">'.$serviceList[$i].'</a>';
        }
         ?>
    </div>

    <div class="order">
       <div class="order-close-icon"></div>
       <div class="order-content">
           <?php $form = ActiveForm::begin(); ?>
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                   <?= $form->field($modelBook, 'ship')->dropdownList(ArrayHelper::map($ship, 'name', 'name'), ['prompt'=>'Выбрать теплоход',
                   'class' => 'application-form-input-mobile'])->label(false) ?>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                   <?= $form->field($modelBook, 'event')->dropdownList(ArrayHelper::map($event, 'name', 'name'), ['prompt'=>'Мероприятие',
                   'class' => 'application-form-input-mobile'])->label(false) ?>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                   <?= $form->field($modelBook, 'route')->dropdownList(ArrayHelper::map($route, 'name', 'name'), ['prompt'=>'Маршрут',
                   'class' => 'application-form-input-mobile'])->label(false) ?>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 application-form-mobile">
                   <?= $form->field($modelBook, 'guests')->dropdownList(ArrayHelper::map($guests, 'name', 'name'), ['prompt'=>'Количество гостей',
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

    <div class="article-datetime">17:00 21.07.2018</div>
    <div class="article-caption">
        СЛЕДУЕТ, ОДНАКО ЗАБЫВАТЬ, ЧТО НОВАЯ МОДЕЛЬ
        ОРГАНИЗАЦИОННОЙ ДЕЯТЕЛЬНОСТИ ПОЗВОЛЯЕТ ВЫПОЛНЯТЬ
    </div>
    <div class="article-photo"></div>
    <div class="article-text">
        Разнообразный и богатый опыт новая модель организационной деятельности позволяет выполнять важные задания по разработке модели
        развития. Не следует, однако забывать, что консультация с широким активом представляет собой интересный эксперимент проверки позиций,
        занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров.
        <br><br>
        Значимость этих проблем настолько очевидна, что рамки и место обучения кадров способствует подготовки и реализации позиций, занимаемых
        участниками в отношении поставленных задач.
        <br><br>
        ИДЕЙНЫЕ СООБРАЖЕНИЯ ВЫСШЕГО ПОРЯДКА, А ТАКЖЕ УКРЕПЛЕНИЕ И РАЗВИТИЕ
        <br><br>
        Прежде чем начать, хочу чтобы вы знали. Человек, которого незаконно обвиняют в этом бесчеловечном преступлении - мой сводный брат.
        <br><br>
        <div class="quote"></div>
        <div class="quote-border"></div>
        <div class="quote-text">
            Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные
            задания по разработке модели развития. Повседневная практика показывает, что постоянное информационно-пропагандистское
            обеспечение нашей деятельности требуют определения и уточнения форм развития.
        </div>
        <br>
        Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения форм развития.
    </div>
</div>
