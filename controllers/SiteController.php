<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Book;
use app\models\BookSearch;
use app\models\Book1;
use app\models\Book1Search;
use app\models\Contact;
use app\models\ContactSearch;
use app\models\Blog;
use app\models\BlogSearch;
use app\models\Ship;
use app\models\ShipSearch;
use app\models\Event;
use app\models\Guests;
use app\models\Route;
use app\models\Service;
use app\models\Pagination1;
use app\models\Pagination2;
use app\models\Pagination3;
use app\models\Pagesize;

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
        $modelBook1 = new Book1();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $modelContact = new Contact();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('index', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelBook1->load(Yii::$app->request->post()) && $modelBook1->save()) {
            $message = 'Ваш заказ №' . $modelBook1->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook1->id . '. Имя: ' . $modelBook1->name . '; Телефон: ' . $modelBook1->phone]);
            return $this->render('index', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelContact->load(Yii::$app->request->post()) && $modelContact->save()) {
            $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
            return $this->render('index', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        return $this->render('index', [
            'modelBook' => $modelBook,
            'modelBook1' => $modelBook1,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'modelContact' => $modelContact,
            'message' => $message,
        ]);
    }

    public function actionIndexmobile()
    {
        $modelBook = new Book();
        $modelBook1 = new Book1();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $modelContact = new Contact();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('indexmobile', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelBook1->load(Yii::$app->request->post()) && $modelBook1->save()) {
            $message = 'Ваш заказ №' . $modelBook1->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook1->id . '. Имя: ' . $modelBook1->name . '; Телефон: ' . $modelBook1->phone]);
            return $this->render('indexmobile', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelContact->load(Yii::$app->request->post()) && $modelContact->save()) {
            $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
            return $this->render('indexmobile', [
                'modelBook' => $modelBook,
                'modelBook1' => $modelBook1,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        return $this->render('indexmobile', [
            'modelBook' => $modelBook,
            'modelBook1' => $modelBook1,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'modelContact' => $modelContact,
            'message' => $message,
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
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $modelContact = new Contact();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('contact', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelContact->load(Yii::$app->request->post()) && $modelContact->save()) {
            $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
            return $this->render('contact', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');
        //
        //     return $this->refresh();
        // }

        return $this->render('contact', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'modelContact' => $modelContact,
            'message' => $message,
        ]);
    }

    public function actionContactmobile()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $modelContact = new Contact();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('contactmobile', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        if ($modelContact->load(Yii::$app->request->post()) && $modelContact->save()) {
            $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
            return $this->render('contactmobile', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'modelContact' => $modelContact,
                'message' => $message,
            ]);
        }

        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');
        //
        //     return $this->refresh();
        // }


        return $this->render('contactmobile', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'modelContact' => $modelContact,
            'message' => $message,
        ]);
    }

    /**
     * Displays blog page.
     *
     * @return string
     */
    public function actionBlog()
    {
        $modelBook = new Book();
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('blog', [
                'dataProvider' => $dataProvider,
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'message' => $message,
            ]);
        }

        return $this->render('blog', [
            'dataProvider' => $dataProvider,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'message' => $message,
        ]);
    }

    public function actionBlogmobile()
    {
        $modelBook = new Book();
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('blogmobile', [
                'dataProvider' => $dataProvider,
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'message' => $message,
            ]);
        }

        return $this->render('blogmobile', [
            'dataProvider' => $dataProvider,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'message' => $message,
        ]);
    }

    public function actionArticle($id)
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('article', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'message' => $message,
                'modelArticle' => Blog::findOne(['id' => $id]),
            ]);
        }

        return $this->render('article', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'message' => $message,
            'modelArticle' => Blog::findOne(['id' => $id]),
        ]);
    }

    public function actionArticlemobile($id)
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $service = Service::find()->all();
        $message = '';

        if ($modelBook->load(Yii::$app->request->post()) && $modelBook->save()) {
            $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
            Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
            'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
            return $this->render('articlemobile', [
                'modelBook' => $modelBook,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'service' => $service,
                'message' => $message,
                'modelArticle' => Blog::findOne(['id' => $id]),
            ]);
        }

        return $this->render('articlemobile', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'service' => $service,
            'message' => $message,
            'modelArticle' => Blog::findOne(['id' => $id]),
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['admin']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAdmin()
    {
        if (!Yii::$app->user->isGuest) {
            $searchModelBook = new BookSearch();
            $dataProviderBook = $searchModelBook->search(Yii::$app->request->queryParams);
            $searchModelContact = new ContactSearch();
            $dataProviderContact = $searchModelContact->search(Yii::$app->request->queryParams);
            $pagesize = Pagesize::find()->all();
            $bookpagination = Pagination1::findOne(['id' => 1]);
            $dataProviderBook->pagination->pageSize = $bookpagination->pagesize;
            $contactpagination = Pagination2::findOne(['id' => 2]);
            $dataProviderContact->pagination->pageSize = $contactpagination->pagesize;

            if ($bookpagination->load(Yii::$app->request->post()) && $bookpagination->save()) {
                $dataProviderBook->pagination->pageSize = $bookpagination->pagesize;
                $dataProviderContact->pagination->pageSize = $contactpagination->pagesize;
                return $this->render('admin', [
                    'dataProviderBook' => $dataProviderBook,
                    'searchModelBook' => $searchModelBook,
                    'dataProviderContact' => $dataProviderContact,
                    'searchModelContact' => $searchModelContact,
                    'pagesize' => $pagesize,
                    'bookpagination' => $bookpagination,
                    'contactpagination' => $contactpagination,
                ]);
            }

            if ($contactpagination->load(Yii::$app->request->post()) && $contactpagination->save()) {
                $dataProviderBook->pagination->pageSize = $bookpagination->pagesize;
                $dataProviderContact->pagination->pageSize = $contactpagination->pagesize;
                return $this->render('admin', [
                    'dataProviderBook' => $dataProviderBook,
                    'searchModelBook' => $searchModelBook,
                    'dataProviderContact' => $dataProviderContact,
                    'searchModelContact' => $searchModelContact,
                    'pagesize' => $pagesize,
                    'bookpagination' => $bookpagination,
                    'contactpagination' => $contactpagination,
                ]);
            }

            return $this->render('admin', [
                'dataProviderBook' => $dataProviderBook,
                'searchModelBook' => $searchModelBook,
                'dataProviderContact' => $dataProviderContact,
                'searchModelContact' => $searchModelContact,
                'pagesize' => $pagesize,
                'bookpagination' => $bookpagination,
                'contactpagination' => $contactpagination,
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionAdminblog()
    {
        if (!Yii::$app->user->isGuest) {
            $searchModelBlog = new BlogSearch();
            $dataProviderBlog = $searchModelBlog->search(Yii::$app->request->queryParams);
            $pagesize = Pagesize::find()->all();
            $blogpagination = Pagination3::findOne(['id' => 3]);
            $dataProviderBlog->pagination->pageSize = $blogpagination->pagesize;

            if ($blogpagination->load(Yii::$app->request->post()) && $blogpagination->save()) {
                $dataProviderBlog->pagination->pageSize = $blogpagination->pagesize;
                return $this->render('adminblog', [
                    'dataProviderBlog' => $dataProviderBlog,
                    'searchModelBlog' => $searchModelBlog,
                    'pagesize' => $pagesize,
                    'blogpagination' => $blogpagination,
                ]);
            }

            return $this->render('adminblog', [
                'dataProviderBlog' => $dataProviderBlog,
                'searchModelBlog' => $searchModelBlog,
                'pagesize' => $pagesize,
                'blogpagination' => $blogpagination,
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionCreatebook()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new Book();
            $ship = Ship::find()->all();
            $event = Event::find()->all();
            $guests = Guests::find()->all();
            $route = Route::find()->all();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewbook', 'id' => $model->id]);
            }

            return $this->render('createbook', [
                'model' => $model,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionCreateblog()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new Blog();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewblog', 'id' => $model->id]);
            }

            return $this->render('createblog', [
                'model' => $model,
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionCreatecontact()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new Contact();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewcontact', 'id' => $model->id]);
            }

            return $this->render('createcontact', [
                'model' => $model,
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionViewbook($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewbook', [
                'model' => Book::findOne(['id' => $id]),
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionViewblog($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewblog', [
                'model' => Blog::findOne(['id' => $id]),
            ]);
        }

        return $this->redirect(['login']);
    }

    public function actionViewcontact($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewcontact', [
                'model' => Contact::findOne(['id' => $id]),
            ]);
        }
        return $this->redirect(['login']);
    }

    public function actionUpdatebook($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = Book::findOne(['id' => $id]);
            $ship = Ship::find()->all();
            $event = Event::find()->all();
            $guests = Guests::find()->all();
            $route = Route::find()->all();
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewbook', 'id' => $model->id]);
            }

            return $this->render('updatebook', [
                'model' => $model,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
            ]);
        }
        return $this->redirect(['login']);
    }

    public function actionUpdateblog($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = Blog::findOne(['id' => $id]);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewblog', 'id' => $model->id]);
            }

            return $this->render('updateblog', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['login']);
    }

    public function actionUpdatecontact($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = Contact::findOne(['id' => $id]);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewcontact', 'id' => $model->id]);
            }

            return $this->render('updatecontact', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['login']);
    }

    public function actionDeletebook($id)
    {
        if (!Yii::$app->user->isGuest) {
            Book::findOne(['id' => $id])->delete();

            return $this->redirect(['admin']);
        }
        return $this->redirect(['login']);
    }

    public function actionDeleteblog($id)
    {
        if (!Yii::$app->user->isGuest) {
            Blog::findOne(['id' => $id])->delete();

            return $this->redirect(['adminblog']);
        }
        return $this->redirect(['login']);
    }

    public function actionDeletecontact($id)
    {
        if (!Yii::$app->user->isGuest) {
            Contact::findOne(['id' => $id])->delete();

            return $this->redirect(['admin']);
        }
        return $this->redirect(['login']);
    }
}
