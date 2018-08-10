<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="blog-record" data-key="<?= $model->id; ?>">
    <div class="blog-record-photo"></div>
    <div class="blog-record-header"><?= Html::a($model->titleblog, ['/site/article', 'id' => $model->id]) ?></div>
    <div class="blog-record-date"><?= Html::encode($model->datetimeblog); ?></div>
    <div class="blog-record-text">
        <?= Html::encode($model->textblog); ?>
        <span class="blog-record-read-more"><?= Html::a('Читать далее', ['/site/article', 'id' => $model->id]) ?></span>
    </div>
</div>
<div class="blog-space"></div>
