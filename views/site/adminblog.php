<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;
use yii\grid\GridView;
use app\models\Blog;


$this->context->layout = 'admin';
$this->title = 'CUBA LIBRE admin blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-admin-blog">

    <div class="form-header">Блог
        <?= Html::a('Создать статью', ['createblog'], ['class' => 'btn btn-success', 'style' => ['font-size' => '20px']]) ?>
        <div class="pagination-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($blogpagination, 'pagesize')->dropdownList(ArrayHelper::map($pagesize, 'name', 'name'), ['class' => 'blogpagination']) ?>
            <div class="form-group">
                <?= Html::submitButton('Обновить',
                ['class' => 'btn btn-success blogpagesizerefresh', 'style' => ['display' => 'none']]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProviderBlog,
        'filterModel' => $searchModelBlog,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'datetimeblog',
            [
                'attribute' => 'titleblog',
                'format' => 'raw',
                'value' => function (Blog $data) {
                    return Html::a(Html::encode($data->titleblog), Url::to(['viewblog', 'id'=> $data->id]));
                },
            ],
            'textblog:ntext',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{viewblog} {updateblog} {deleteblog}',
            'buttons' => [
                'viewblog' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('yii', 'Просмотр'),
                                ]);
                },
                'updateblog' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Редактировать'),
                                ]);
                },
                'deleteblog' => function ($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Удалить'),
                                        'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить эту статью?'),
                                        'data-method' => 'post',
                                ]);
                },
                ],
        ],
        ],
    ]); ?>

</div>
