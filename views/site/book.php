<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form ActiveForm */
$this->title = 'Бронировать теплоход';
?>
<div class="book">

    <?php $form = ActiveForm::begin();
            echo '<label class="control-label">Выбрать дату и время бронирования теплохода</label>';
            echo DateTimePicker::widget([
            'name' => 'datetime_10',
            'id' => 'datetimepicker1',
            'options' => ['placeholder' => 'Выберите дату и время ...'],
            'language' => 'ru',
            'type' => DateTimePicker::TYPE_INPUT,
            'value' => '02-Июн-2018 10:00',
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy hh:ii',
            ]
    ]);
    ?>
        <br><br>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'datetime')->textInput(['id' => 'datetimeinput2', 'readonly' => 'true']) ?>
        <?= $form->field($model, 'comments') ?>

        <div class="form-group">
            <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- book -->
