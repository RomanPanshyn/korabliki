<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Редактировать услугу ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Услуги (админка)', 'url' => ['adminservices']];
$this->params['breadcrumbs'][] = ['label' => 'Услуга '.$model->id, 'url' => ['viewservice', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="update-service">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_service', [
        'model' => $model,
    ]) ?>

</div>
