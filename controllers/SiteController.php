<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Book;
use app\models\Contact;
use app\models\Comments;
use app\models\Blog;
use app\models\BlogSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $modelBook = new Book();
        $model = new Contact();
        return $this->render('index', [
            'modelBook' => $modelBook,
            'model' => $model,
        ]);
    }

    public function actionIndexmobile()
    {
        $modelBook = new Book();
        $model = new Contact();
        return $this->render('indexmobile', [
            'modelBook' => $modelBook,
            'model' => $model,
        ]);
    }

    public function actionBook()
    {
        $model = new Book();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){

                return $this->render('book-confirm', ['model' => $model]);
        } else {

            return $this->render('book', ['model' => $model]);
        }
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new Contact();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');
        //
        //     return $this->refresh();
        // }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionContactmobile()
    {
        $model = new Contact();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');
        //
        //     return $this->refresh();
        // }
        return $this->render('contactmobile', [
            'model' => $model,
        ]);
    }

    /**
     * Displays blog page.
     *
     * @return string
     */
    public function actionBlog()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('blog', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBlogmobile()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('blogmobile', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionArticle()
    {
        return $this->render('article');
    }

    public function actionArticlemobile()
    {
        return $this->render('articlemobile');
    }
}
