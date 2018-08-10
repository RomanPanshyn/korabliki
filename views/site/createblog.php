<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Создать статью';
$this->params['breadcrumbs'][] = ['label' => 'Заказы и контакты (админка)', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => 'Блог (админка)', 'url' => ['adminblog']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_blog', [
        'model' => $model,
    ]) ?>

</div>
