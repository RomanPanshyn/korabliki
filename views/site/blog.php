<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->context->layout = 'blog';
$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-blog">

    <div class="services">
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

    <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}\n{summary}\n{pager}",
                'pager' => ['options' => ['class' => 'pagination']],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item', ['model' => $model]);
                },
            ]) ?>
</div>
