<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

$this->context->layout = 'blog';
$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-blog">    
    <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}\n{summary}\n{pager}",
                'pager' => ['options' => ['class' => 'pagination']],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item', ['model' => $model]);
                },
            ]) ?>
</div>
