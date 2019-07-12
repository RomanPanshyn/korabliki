<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Аренда теплохода в Киеве без посредников: цена, описание и фото на Korabliki.com.ua',
]);
$this->params['footerSEOText'] = $footerseo->text;
$this->title = 'Аренда теплохода в Киеве без посредников: цена, описание и фото на Korabliki.com.ua';
?>
<div class="site-index">
     <div class="message-index">
         <?= $message ?>
     </div>

     <div class="order">
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

    <div class="ship-image" id="idship-image">
        <div class="application">
            <div class="application-header">ДОВЕРЬТЕ ПРОВЕДЕНИЕ ВАШЕГО ПРАЗДНИКА НАМ!</div>
            <div class="application-description">
                Ваш праздник на нашем теплоходе станет самым незабываемым для вас и ваших гостей.
                Насладитесь праздником во время прогулки по Десне и Днепру.
            </div>
            <?php $form = ActiveForm::begin(); ?>
            <div class="grid-container">
                <div class="application-form">
                    <?= $form->field($modelBook1, 'ship')->dropdownList(ArrayHelper::map($ship, 'name', 'name'), ['prompt'=>'Выбрать теплоход',
                        'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'event')
                        ->dropdownList(ArrayHelper::map($event, 'name', 'name'), ['prompt'=>'Мероприятие',
                            'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'route')->dropdownList(ArrayHelper::map($route, 'name', 'name'), ['prompt'=>'Маршрут',
                        'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'guests')->dropdownList(ArrayHelper::map($guests, 'name', 'name'), ['prompt'=>'Количество гостей',
                        'class' => 'application-form-input'])->label(false) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input'])
                        ->label(false) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99'])
                        ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input']) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'bookdate')->label(false)->widget(DateTimePicker::className(), [
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
                        if ($.inArray($('#book1-bookdate').val(), seldate, i) == i)
                        {
                            let eachtime = seltime[$.inArray($('#book1-bookdate').val(), seldate, i)].split(',');
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
                    $('.book-time-application').css('display', 'block');
                 }",
                        ],
                    ]) ?>
                </div>
                <div class="application-form">
                    <?= $form->field($modelBook1, 'booktime')->textInput(['id' => 'book-time2', 'class' => 'application-form-input', 'readonly'=>true])
                        ->label(false) ?>
                </div>
                <div class="application-form">
                    <div class="form-group">
                        <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-send', 'name' => 'send-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="book-time-application">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-continue">ПРОДОЛЖИТЬ</div>
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
        <div class="ship-title">ТЕПЛОХОД</div>
        <div class="cuba-libre">CUBA LIBRE</div>
    </div>
    <div class="cuba-libre-area">
        <div class="cuba-libre-grid">
            <div class="cuba-libre-photo"></div>
            <div class="description">
                Экстравагантный теплоход «Cuba Libre» отличается неповторимыми очертаниями и чем-то напоминает плавучий
                павильон для отдыха. Салон с панорамным остеклением, открытая терраса, прекрасная отделка с мягкой
                обивкой — всё на борту располагает к расслабляющему отдыху, который даст возможность быстро
                восстановиться после утомительных будней.<br><br>
                На борту имеется полностью оборудованная кухня, санузел, душ с горячей и холодной водой.
                Есть полный комплект мебели для пикника, включая мангал с шампурами и котёл для ухи, рыбацкие
                принадлежности. Аудиоаппаратура, телевизор и возможность пользоваться интернетом существенно увеличивают
                возможности развлекательной программы.<br><br>
                Есть возможность заказать ресторанное меню, фуршет, банкет и дополнительные блюда для пикника, в любой
                комбинации по предварительной договорённости.
            </div>
        </div>
    </div>
    <div class="more-photo">БОЛЬШЕ ФОТО</div>

    <div id="gallery-bg">
        <div class="gallery-window-bg">
            <div class="gallery-photo"></div>
            <div class="gallery-close-icon"></div>
            <div class="gallery-previous"></div>
            <div class="gallery-next"></div>
            <div class="gallery-icon-27"></div>
            <div class="gallery-icon-26"></div>
            <div class="gallery-icon-25"></div>
            <div class="gallery-icon-24"></div>
            <div class="gallery-icon-23"></div>
            <div class="gallery-icon-22"></div>
            <div class="gallery-icon-21"></div>
            <div class="gallery-icon-20"></div>
            <div class="gallery-icon-19"></div>
            <div class="gallery-icon-18"></div>
            <div class="gallery-icon-17"></div>
            <div class="gallery-icon-16"></div>
            <div class="gallery-icon-15"></div>
            <div class="gallery-icon-14"></div>
            <div class="gallery-icon-13"></div>
            <div class="gallery-icon-12"></div>
            <div class="gallery-icon-11"></div>
            <div class="gallery-icon-10"></div>
            <div class="gallery-icon-9"></div>
            <div class="gallery-icon-8"></div>
            <div class="gallery-icon-7"></div>
            <div class="gallery-icon-6"></div>
            <div class="gallery-icon-5"></div>
            <div class="gallery-icon-4"></div>
            <div class="gallery-icon-3"></div>
            <div class="gallery-icon-2"></div>
            <div class="gallery-icon-1"></div>
            <div class="gallery-icon0"></div>

            <div class="gallery-icon1"></div>
            <div class="gallery-icon2"></div>
            <div class="gallery-icon3"></div>
            <div class="gallery-icon4"></div>
            <div class="gallery-icon5"></div>

            <div class="gallery-icon6"></div>
            <div class="gallery-icon7"></div>
            <div class="gallery-icon8"></div>
            <div class="gallery-icon9"></div>
            <div class="gallery-icon10"></div>
            <div class="gallery-icon11"></div>
            <div class="gallery-icon12"></div>
            <div class="gallery-icon13"></div>
            <div class="gallery-icon14"></div>
            <div class="gallery-icon15"></div>
            <div class="gallery-icon16"></div>
            <div class="gallery-icon17"></div>
            <div class="gallery-icon18"></div>
            <div class="gallery-icon19"></div>
            <div class="gallery-icon20"></div>
            <div class="gallery-icon21"></div>
            <div class="gallery-icon22"></div>
            <div class="gallery-icon23"></div>
            <div class="gallery-icon24"></div>
            <div class="gallery-icon25"></div>
            <div class="gallery-icon26"></div>
            <div class="gallery-icon27"></div>
            <div class="gallery-icon28"></div>
            <div class="gallery-icon29"></div>
            <div class="gallery-icon30"></div>
            <div class="gallery-icon31"></div>
            <div class="gallery-icon32"></div>
        </div>
    </div>

    <div class="organize">ОРГАНИЗУЕМ:</div>
    <div class="organize-area">
        <div class="organize-grid">
            <div class="organize-record">
                <div class="tour"></div>
                <div class="organize-description">Незабываемое турне по просторам Днепра, Десны</div>
            </div>
            <div class="organize-record">
                <div class="party"></div>
                <div class="organize-description">Катерные вечеринки</div>
            </div>
            <div class="organize-record">
                <div class="disco"></div>
                <div class="organize-description">День рождения, корпоратив, свадьба</div>
            </div>
            <div class="organize-record">
                <div class="romantic"></div>
                <div class="organize-description">Романтические ночные прогулки</div>
            </div>
            <div class="organize-record">
                <div class="other"></div>
                <div class="organize-description">И многое другое по вашему желанию</div>
            </div>
        </div>
    </div>

    <div class="characteristic-bg">
        <div class="characteristic-title">ПРОГУЛКИ ПО ДЕСНЕ И ДНЕПРУ</div>
        <div class="characteristic-area">
            <div class="characteristic-grid">
                <div class="characteristic-record">
                    <ul class="characteristic-ul">
                        <li class="characteristic-header">ПАССАЖИРОВМЕСТИМОСТЬ:</li>
                        <li class="characteristic-list">- 15 гостей оптимально</li>
                        <li class="characteristic-list">- 20 максимально</li>
                    </ul>
                    <ul class="characteristic-ul">
                        <li class="characteristic-header">ЧТО ЕСТЬ НА БОРТУ:</li>
                        <li class="characteristic-list">- закрытый салон</li>
                        <li class="characteristic-list">- полуоткрытая летняя терраса сзади</li>
                        <li class="characteristic-list">- открытая верхняя площадка<br>с зеленой травой, столом и стульями</li>
                        <li class="characteristic-list">- мини кухня</li>
                        <li class="characteristic-list">- санузел</li>
                    </ul>
                </div>
                <div class="characteristic-record">
                    <div class="lounge"></div>
                </div>
                <div class="characteristic-record">
                    <div class="bathroom"></div>
                </div>
                <div class="characteristic-record">
                    <ul class="characteristic-ul">
                        <li class="characteristic-list">- холодильник</li>
                        <li class="characteristic-list">- душ</li>
                        <li class="characteristic-list">- биотуалет</li>
                        <li class="characteristic-list">- плазменный телевизор</li>
                        <li class="characteristic-list">- звуковая система</li>
                        <li class="characteristic-list">- мангал</li>
                    </ul class="characteristic-ul">
                    <ul class="characteristic-ul">
                        <li class="characteristic-header">ХАРАКТЕРИСТИКИ</li>
                        <li class="characteristic-list">- скорость: 15 км/час</li>
                        <li class="characteristic-list">- длина: 13 м</li>
                        <li class="characteristic-list">- ширина: 3.6 м</li>
                        <li class="characteristic-list">- осадка: 0.3 м</li>
                        <li class="characteristic-list">- электричество: 220В и 12В</li>
                        <li class="characteristic-list">- мощность двигателя: 70 л.с.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-image">
        <div class="rent-price-title">СТОИМОСТЬ АРЕНДЫ:</div>
        <div class="rent-price-description">
            <span class="price">1500 ГРН</span> / ЧАС<br>
            <div class="offer">МИНИМАЛЬНЫЙ ЗАКАЗ 3 ЧАСА</div>
        </div>
        <div class="contact">
            <div class="contact-title">СВЯЖИТЕСЬ С НАМИ!</div>
            <?php $form = ActiveForm::begin(); ?>
            <div class="contact-form-grid">
                <div class="contact-record">
                    <?= $form->field($modelContact, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'contact-form-main'])
                        ->label(false) ?>
                </div>
                <div class="contact-record">
                    <?= $form->field($modelContact, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99'])
                        ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'contact-form-main']) ?>
                </div>
                <div class="contact-record form-group">
                    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn-contact-send', 'name' => 'contact-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
