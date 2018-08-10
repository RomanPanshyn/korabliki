<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record-mobile" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header-mobile"><?= Html::a($model->titleblog, ['/site/articlemobile', 'id' => $model->id]) ?></div>
    <div class="blog-record-date-mobile"><?= Html::encode($model->datetimeblog); ?></div>
    <div class="blog-record-text-mobile">
        <?= Html::encode($model->textblog); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/articlemobile', 'id' => $model->id]) ?></span>
    </div>
</div>
<div class="blog-space"></div>
