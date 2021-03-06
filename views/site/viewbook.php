<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Заказ '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы и контакты (админка)', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-book">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['updatebook', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['deletebook', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот заказ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ship',
            'route',
            'event',
            'guests',
            'name',
            'phone',
            'bookdate',
            'booktime',
        ],
    ]) ?>

</div>
