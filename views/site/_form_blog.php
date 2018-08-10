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

<div class="blog-form-update">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'datetimeblog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titleblog')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'textblog')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'datetimearticle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titlearticle')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'textarticle')->textarea(['rows' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
