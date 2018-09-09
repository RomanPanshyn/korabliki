<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header"><?= Html::a($model->titleblog, ['/site/article', 'url' => $model->url]) ?></div>
    <div class="blog-record-date"><?= Html::encode($model->datetimeblog); ?></div>
    <div class="blog-record-text">
        <?= Html::encode($model->textblog); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/article', 'url' => $model->url]) ?></span>
    </div>
</div>
<div class="blog-space"></div>
