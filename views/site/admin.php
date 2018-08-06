<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;
use yii\grid\GridView;

$this->context->layout = 'admin';
$this->title = 'ПАНСЬКА ВТІХА admin';
?>
<div class="site-admin">

    <div class="form-header">Заказы
        <?= Html::a('Создать заказ', ['createbook'], ['class' => 'btn btn-success', 'style' => ['font-size' => '20px']]) ?>
        <div class="pagination-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($bookpagination, 'pagesize')->dropdownList(ArrayHelper::map($pagesize, 'name', 'name'), ['class' => 'bookpagination']) ?>
            <div class="form-group">
                <?= Html::submitButton('Обновить',
                ['class' => 'btn btn-success bookpagesizerefresh', 'style' => ['display' => 'none']]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProviderBook,
        'filterModel' => $searchModelBook,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'ship',
            'route',
            'event',
            'guests',
            'name',
            'phone',
            'datefrom',
            'dateto',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{viewbook} {updatebook} {deletebook}',
            'buttons' => [
                'viewbook' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('yii', 'Просмотр'),
                                ]);
                },
                'updatebook' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Редактировать'),
                                ]);
                },
                'deletebook' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Удалить'),
                                        'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот заказ?'),
                                        'data-method' => 'post',
                                ]);
                },
                ],
        ],
        ],
    ]); ?>

    <div class="form-header">Контакты
        <?= Html::a('Создать контакт', ['createcontact'], ['class' => 'btn btn-success', 'style' => ['font-size' => '20px']]) ?>
        <div class="pagination-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($contactpagination, 'pagesize')->dropdownList(ArrayHelper::map($pagesize, 'name', 'name'), ['class' => 'contactpagination']) ?>
            <div class="form-group">
                <?= Html::submitButton('Обновить',
                ['class' => 'btn btn-success contactpagesizerefresh', 'style' => ['display' => 'none']]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProviderContact,
        'filterModel' => $searchModelContact,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'phone',
            'email',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{viewcontact} {updatecontact} {deletecontact}',
            'buttons' => [
                'viewcontact' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('yii', 'Просмотр'),
                                ]);
                },
                'updatecontact' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Редактировать'),
                                ]);
                },
                'deletecontact' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Удалить'),
                                        'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот контакт?'),
                                        'data-method' => 'post',
                                ]);
                },
                ],

        ],
        ],
    ]); ?>

</div>
