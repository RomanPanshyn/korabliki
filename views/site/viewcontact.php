<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Контакт '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['updatecontact', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['deletecontact', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот контакт?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'email',
        ],
    ]) ?>

</div>
