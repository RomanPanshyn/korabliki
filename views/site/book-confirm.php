<?php
use yii\helpers\Html;
$this->title = 'Бронирование подтверждено';
 ?>
<h1>Бронирование подтверждено! Спасибо!</h1>
<p>Вы ввели следующую информацию для брони:</p>

<ul>
  <li><label>Имя</label>: <?= Html::encode($model->name) ?></li>
  <li><label>Телефон</label>: <?= Html::encode($model->phone) ?></li>
  <li><label>Дата и время</label>: <?= Html::encode($model->datetime) ?></li>
  <li><label>Комментарии</label>: <?= Html::encode($model->comments) ?></li>

</ul>
