<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Создать контакт';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_contact', [
        'model' => $model,
    ]) ?>

</div>
