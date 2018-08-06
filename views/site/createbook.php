<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Создать заказ';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_book', [
        'model' => $model,
        'ship' => $ship,
        'event' => $event,
        'guests' => $guests,
        'route' => $route,
    ]) ?>

</div>
