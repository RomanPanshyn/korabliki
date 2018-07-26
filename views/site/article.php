<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'article';
$this->title = 'Статья';
?>
<div class="site-article">
    <div class="blog-space"></div>
    <div class="avatar-bg"></div>
    <div class="avatar"></div>
    <div class="user">
        <div class="user-icon"></div>
        <div class="user-name">JON SANNY</div>
    </div>
    <div class="article-datetime">17:00 21.07.2018</div>
    <div class="article-caption">
        СЛЕДУЕТ, ОДНАКО ЗАБЫВАТЬ, ЧТО НОВАЯ МОДЕЛЬ
        ОРГАНИЗАЦИОННОЙ ДЕЯТЕЛЬНОСТИ ПОЗВОЛЯЕТ ВЫПОЛНЯТЬ
    </div>
    <div class="article-photo"></div>
    <div class="article-text">
        Разнообразный и богатый опыт новая модель организационной деятельности позволяет выполнять важные задания по разработке модели
        развития. Не следует, однако забывать, что консультация с широким активом представляет собой интересный эксперимент проверки позиций,
        занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров.
        <br><br>
        Значимость этих проблем настолько очевидна, что рамки и место обучения кадров способствует подготовки и реализации позиций, занимаемых
        участниками в отношении поставленных задач.
        <br><br>
        ИДЕЙНЫЕ СООБРАЖЕНИЯ ВЫСШЕГО ПОРЯДКА, А ТАКЖЕ УКРЕПЛЕНИЕ И РАЗВИТИЕ
        <br><br>
        Прежде чем начать, хочу чтобы вы знали. Человек, которого незаконно обвиняют в этом бесчеловечном преступлении - мой сводный брат.
        <br><br>
        <div class="quote"></div>
        <div class="quote-border"></div>
        <div class="quote-text">
            Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные
            задания по разработке модели развития. Повседневная практика показывает, что постоянное информационно-пропагандистское
            обеспечение нашей деятельности требуют определения и уточнения форм развития.
        </div>
        <br>
        Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения форм развития.
    </div>
    <div class="article-record-hashtag">#эксперимент &nbsp; #прогрессивно &nbsp; #задания</div>
    <div class="arcicle-social">
        <div class="like-number">2935</div>
        <div class="like"></div>
        <div class="dislike-number">12</div>
        <div class="dislike"></div>
        <div class="comments-number">65</div>
        <div class="comments"></div>
    </div>
    <div class="article-hr"></div>
    <div class="comments-box">
        <div class="comment1">
            <div class="comment-avatar-bg"></div>
            <div class="comment-user">
                <div class="comment-user-icon"></div>
                <div class="comment-user-name">Kenon</div>
            </div>
            <div class="comment-datetime">17:00 11.06.2018</div>
            <div class="comment-text">
                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности позволяет выполнять
                важные задания по разработке систем массового участия
            </div>
        </div>
        <div class="comment-space"></div>
        <div class="comment2">
            <div class="comment-avatar-bg"></div>
            <div class="comment-user">
                <div class="comment-user-icon"></div>
                <div class="comment-user-name">Kim</div>
            </div>
            <div class="comment-datetime">17:00 21.08.2018</div>
            <div class="comment-text">
                Что дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке систем
                массового участия
            </div>
        </div>
        <div class="comment-space"></div>
        <div class="comment3">
            <div class="comment-avatar-bg"></div>
            <div class="comment-user">
                <div class="comment-user-icon"></div>
                <div class="comment-user-name">Oki_Doki</div>
            </div>
            <div class="comment-datetime">17:00 21.09.2018</div>
            <div class="comment-text">
                систем массового участия
            </div>
        </div>
        <div class="new-comment">
            <div class="add-comment-caption">Добавить комментарий</div>
            <?php $form = ActiveForm::begin(); ?>
                <span class="comment-name">
                    <?= $form->field($model, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'input-comment'])
                    ->label(false) ?>
                </span>
                <span class="comment-email">
                    <?= $form->field($model, 'email')->label(false)
                        ->textInput(['placeholder'=>'E-mail', 'class' => 'input-comment']) ?>
                </span>
                <span class="comment-details">
                    <?= $form->field($model, 'comment')->label(false)
                        ->textarea(['placeholder'=>'Комментарий', 'rows' => '4', 'class' => 'input-details-comment']) ?>
                </span>                
                <div class="form-group">
                    <?= Html::submitButton('ОСТАВИТЬ КОММЕНТАРИЙ', ['class' => 'send-comment', 'name' => 'comment-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="article-pagination">1 &nbsp; 2 &nbsp; 3 &nbsp; <span class="blog-page">4</span> &nbsp;
        5 &nbsp; 6 &nbsp; 7 &nbsp; 8 &nbsp; 9... 12...16
    </div>
</div>
