<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Создать услугу';
$this->params['breadcrumbs'][] = ['label' => 'Услуги (админка)', 'url' => ['adminservices']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_service', [
        'model' => $model,
    ]) ?>

</div>
