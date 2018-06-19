<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form ActiveForm */
?>
<div class="site-bookform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ship') ?>
        <?= $form->field($model, 'route') ?>
        <?= $form->field($model, 'event') ?>
        <?= $form->field($model, 'guests') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'datefrom') ?>
        <?= $form->field($model, 'dateto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-bookform -->
