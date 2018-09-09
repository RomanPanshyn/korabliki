<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->title = 'ПАНСЬКА ВТІХА';
?>
<div class="site-index">
     <div class="message-index">
         <?= $message ?>
     </div>
     <div class="services">
         <div class="services-close-icon"></div>
         <?php
         for ($i = 0; $i < count($service); $i++) {
             echo Html::a($service[$i]->name, Url::to(['service', 'url' => $service[$i]->url]));
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



    <div class="application">
        <div class="application-blur"></div>
        <div class="application-bg"></div>
        <div class="application-content">
            <h2><b>ДОВЕРЬТЕ ПРОВЕДЕНИЕ ВАШЕГО ПРАЗДНИКА НАМ!</b></h2>
            <div class="application-description">
                <p>
                    Ваш праздник на нашем теплоходе станет самым незабываемым для вас и ваших гостей.<br>
                    Насладитесь праздником во время прогулки по Десне и Днепру
                </p>
            </div>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'ship')->dropdownList(ArrayHelper::map($ship, 'name', 'name'), ['prompt'=>'Выбрать теплоход',
                    'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'event')
                    ->dropdownList(ArrayHelper::map($event, 'name', 'name'), ['prompt'=>'Мероприятие',
                    'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 label-date application-form">
                    с
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 application-form">
                    <?= $form->field($modelBook1, 'datefrom')->label(false)->widget(DateTimePicker::className(), [
                        'name' => 'datetime_10',
                        'id' => 'datetimepicker1',
                        'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input'],
                        'language' => 'ru',
                        'type' => DateTimePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd/mm/yyyy hh:ii',
                        ]
                    ]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'route')->dropdownList(ArrayHelper::map($route, 'name', 'name'), ['prompt'=>'Маршрут',
                    'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'guests')->dropdownList(ArrayHelper::map($guests, 'name', 'name'), ['prompt'=>'Количество гостей',
                    'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 label-date application-form">
                    до
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 application-form">
                    <?= $form->field($modelBook1, 'dateto')->label(false)->widget(DateTimePicker::className(), [
                        'name' => 'datetime_10',
                        'id' => 'datetimepicker2',
                        'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input'],
                        'language' => 'ru',
                        'type' => DateTimePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd/mm/yyyy hh:ii',
                        ]
                    ]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input'])
                    ->label(false) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelBook1, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99'])
                        ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input']) ?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 label-date application-form">

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 application-form">
                    <div class="form-group">
                        <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-send', 'name' => 'send-button']) ?>
                    </div>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="ship-title">
        ТЕПЛОХОД
    </div>
    <div class="cuba-libre">
        CUBA LIBRE
    </div>
    <div class="cuba-libre-photo"></div>
    <div class="description-bg"></div>
    <div class="description">
        <p>
            Экстравагантный теплоход «Cuba Libre» отличается неповторимыми очертаниями и чем-то напоминает плавучий
            павильон для отдыха. Салон с панорамным остеклением, открытая терраса, прекрасная отделка с мягкой
            обивкой — всё на борту располагает к расслабляющему отдыху, который даст возможность быстро
            восстановиться после утомительных будней.
            <br class="br-description">
            На борту имеется полностью оборудованная кухня, санузел, душ с горячей и холодной водой.
            Есть полный комплект мебели для пикника, включая мангал с шампурами и котёл для ухи, рыбацкие
            принадлежности. Аудиоаппаратура, телевизор и возможность пользоваться интернетом существенно увеличивают
            возможности развлекательной программы.
            <br class="br-description">
            Есть возможность заказать ресторанное меню, фуршет, банкет и дополнительные блюда для пикника, в любой
            комбинации по предварительной договорённости.
        </p>
    </div>

    <div class="organize">
        ОРГАНИЗУЕМ:
    </div>
    <div class="tour"></div>
    <div class="tour-description">
        Незабываемое турне<br>
        по просторам<br>
        Днепра, Десны
    </div>
    <div class="fireworkleft"></div>
    <div class="fireworkright"></div>
    <div class="boat"></div>
    <div class="party-description">Катерные вечеринки</div>
    <div class="disco"></div>
    <div class="disco-description">
        День рождения,<br>
        корпоратив, свадьба
    </div>
    <div class="romantic"></div>
    <div class="romantic-description">
        Романтические<br>
        ночные прогулки
    </div>
    <div class="other"></div>
    <div class="other-description">
        И многое другое по<br>
        вашему желанию
    </div>
    <div class="characteristic-title">
        ПРОГУЛКИ ПО ДЕСНЕ И ДНЕПРУ
    </div>
    <div class="lounge"></div>
    <div class="bathroom"></div>
    <div class="passenger-capacity-line"></div>
    <div class="passenger-capacity-item1"></div>
    <div class="passenger-capacity-item2"></div>
    <div class="passenger-capacity-item3"></div>
    <div class="passenger-capacity">
        ПАССАЖИРОВМЕСТИМОСТЬ:
    </div>
    <div class="passenger-capacity-list">
        - 15 гостей оптимально<br>
        - 20 максимально
    </div>
    <div class="on-board-line1"></div>
    <div class="on-board-item11"></div>
    <div class="on-board-item12"></div>
    <div class="on-board-item13"></div>
    <div class="on-board-item14"></div>
    <div class="on-board-item15"></div>
    <div class="on-board-item16"></div>
    <div class="on-board-item17"></div>

    <div class="on-board-line2"></div>
    <div class="on-board-item21"></div>
    <div class="on-board-item22"></div>
    <div class="on-board-item23"></div>
    <div class="on-board-item24"></div>
    <div class="on-board-item25"></div>
    <div class="on-board-item26"></div>
    <div class="on-board-item27"></div>
    <div class="on-board-item28"></div>
    <div class="on-board">
        ЧТО ЕСТЬ НА БОРТУ:
    </div>
    <div class="on-board-list1">
        - закрытый салон<br>
        - полуоткрытая летняя<br>
        терраса сзади<br>
        - открытая верхняя площадка<br>
        с зеленой травой, шезлонгами,<br>
        пуфиками, столом и стульями<br>
        - миникухня<br>
        - санузел<br>
        - холодильник
    </div>
    <div class="on-board-list2">
        - микроволновка<br>
        - душ<br>
        - биотуалет<br>
        - плазменный телевизор<br>
        - газовая плита<br>
        - звуковая система<br>
        - мангал<br>
        - пивная установка
    </div>
    <div class="characteristic-line"></div>
    <div class="characteristic-item1"></div>
    <div class="characteristic-item2"></div>
    <div class="characteristic-item3"></div>
    <div class="characteristic-item4"></div>
    <div class="characteristic-item5"></div>
    <div class="characteristic-item6"></div>
    <div class="characteristic-item7"></div>
    <div class="characteristic">
        ХАРАКТЕРИСТИКИ
    </div>
    <div class="characteristic-list">
        - скорость: 15 км/час<br>
        - длина: 13 м<br>
        - ширина: 3.6 м<br>
        - осадка: 0.3 м<br>
        - электричество: 220В и 12В<br>
        - мощность двигателя: 70 л.с.
    </div>
    <div class="rent-price-title">
        СТОИМОСТЬ АРЕНДЫ:
    </div>
    <div class="rent-price-description">
        <span class="price">1500 ГРН</span> / ХОДОВОЙ ЧАС<br>
        <span class="price">1500 ГРН</span> / СТОЯНОЧНЫЙ ЧАС (В БУДНИЕ ДНИ)<br>
        <div class="offer">
            МИНИМАЛЬНЫЙ ЗАКАЗ 3 ЧАСА <span class="price">= 4500 ГРН.</span><br>
            ПРИ ЗАКАЗЕ ОТ <span class="price">10 ЧАСОВ, КЕГА ПИВА В ПОДАРОК!</span>
        </div>
    </div>
    <div class="contact">
        <div class="contact-bg"> </div>
        <div class="contact-content">
            <div class="contact-title">СВЯЖИТЕСЬ С НАМИ!</div>
            <div class="contact-form">
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelContact, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input'])
                    ->label(false) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 application-form">
                    <?= $form->field($modelContact, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99'])
                        ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input']) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 application-form form-group">
                    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-contact-send', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
