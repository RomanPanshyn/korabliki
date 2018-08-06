<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->context->layout = 'admin';
$this->title = 'Редактировать контакт ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => 'Контакт '.$model->id, 'url' => ['viewcontact', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="update-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_contact', [
        'model' => $model,
    ]) ?>

</div>
