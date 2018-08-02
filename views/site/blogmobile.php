<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

$this->context->layout = 'blogmobile';
$this->title = 'Блог';
$this->params['breadcrumbs'][] = ['label' => 'Главная (моб)', 'url' => ['indexmobile']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-blog-mobile">
    <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}\n{summary}\n{pager}",
                'pager' => ['options' => ['class' => 'pagination']],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_itemmobile', ['model' => $model]);
                },
            ]) ?>
</div>
