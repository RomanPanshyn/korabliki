<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Статья '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы и контакты (админка)', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => 'Блог (админка)', 'url' => ['adminblog']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-blog">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['updateblog', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['deleteblog', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту статью?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'datetimeblog',
            'titleblog:ntext',
            'textblog:ntext',
            'datetimearticle',
            'titlearticle:ntext',
            'textarticle:ntext',
        ],
    ]) ?>

</div>
