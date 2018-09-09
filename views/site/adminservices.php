<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Dropdown;
use yii\grid\GridView;
use app\models\Service;


$this->context->layout = 'admin';
$this->title = 'ПАНСЬКА ВТІХА admin услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-admin-services">

    <div class="form-header">Услуги
        <?= Html::a('Создать услугу', ['createservice'], ['class' => 'btn btn-success', 'style' => ['font-size' => '20px']]) ?>
        <div class="pagination-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($servicespagination, 'pagesize')->dropdownList(ArrayHelper::map($pagesize, 'name', 'name'), ['class' => 'servicespagination']) ?>
            <div class="form-group">
                <?= Html::submitButton('Обновить',
                ['class' => 'btn btn-success servicespagesizerefresh', 'style' => ['display' => 'none']]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProviderServices,
        'filterModel' => $searchModelServices,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function (Service $data) {
                    return Html::a(Html::encode($data->name), Url::to(['viewservice', 'id'=> $data->id]));
                },
            ],
            'title',
            'url',
            'description:ntext',
            'keywords',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{viewservice} {updateservice} {deleteservice}',
            'buttons' => [
                'viewservice' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('yii', 'Просмотр'),
                                ]);
                },
                'updateservice' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Редактировать'),
                                ]);
                },
                'deleteservice' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Удалить'),
                                        'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить эту услугу?'),
                                        'data-method' => 'post',
                                ]);
                },
                ],
        ],
        ],
    ]); ?>

</div>
