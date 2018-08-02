<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record-mobile" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header-mobile"><?= Html::a($model->title, ['/site/articlemobile']) ?></div>
    <div class="blog-record-date-mobile"><?= Html::encode($model->datetime); ?></div>
    <div class="blog-record-text-mobile">
        <?= Html::encode($model->text); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/articlemobile']) ?></span>
    </div>
</div>
<div class="blog-space"></div>
