<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header"><?= Html::a($model->title, ['/site/article']) ?></div>
    <div class="blog-record-date"><?= Html::encode($model->datetime); ?></div>
    <div class="blog-record-text">
        <?= Html::encode($model->text); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/article']) ?></span>
    </div>
</div>
<div class="blog-space"></div>
