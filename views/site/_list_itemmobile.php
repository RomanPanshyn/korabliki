<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record-mobile" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header-mobile"><?= Html::a($model->titleblog, ['/site/articlemobile', 'url' => $model->url]) ?></div>
    <div class="blog-record-date-mobile"><?= Html::encode($model->datetimeblog); ?></div>
    <div class="blog-record-text-mobile">
        <?= Html::encode($model->textblog); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/articlemobile', 'url' => $model->url]) ?></span>
    </div>
</div>
<div class="blog-space"></div>
