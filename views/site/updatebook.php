<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Редактировать заказ ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы и контакты (админка)', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => 'Заказ '.$model->id, 'url' => ['viewbook', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="update-book">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_book', [
        'model' => $model,
        'ship' => $ship,
        'event' => $event,
        'guests' => $guests,
        'route' => $route,
        'bookRecord' => $bookRecord,
        'schedule1' => $schedule1,
        'schedule2' => $schedule2,
    ]) ?>
    <div class="blog-space"></div>
</div>
