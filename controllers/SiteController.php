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
use app\models\ServiceSearch;
use app\models\Pagination1;
use app\models\Pagination2;
use app\models\Pagination3;
use app\models\Pagination4;
use app\models\Pagesize;
use app\models\Schedule;
use app\models\Footerseo;

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
        $modelContact = new Contact();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $footerseo = Footerseo::findOne(1);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('index', [
                        'modelBook' => $modelBook,
                        'modelBook1' => $modelBook1,
                        'modelContact' => $modelContact,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'footerseo' => $footerseo,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                $bookRecord = Book::find()->all();
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('index', [
                    'modelBook' => $modelBook,
                    'modelBook1' => $modelBook1,
                    'modelContact' => $modelContact,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'footerseo' => $footerseo,
                    'message' => $message,
                ]);
            }
        }

        if ($modelBook1->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook1->bookdate == $bookRecord[$i]->bookdate && $modelBook1->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('index', [
                        'modelBook' => $modelBook,
                        'modelBook1' => $modelBook1,
                        'modelContact' => $modelContact,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'footerseo' => $footerseo,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook1->save();
                $message = 'Ваш заказ №' . $modelBook1->id . ' успешно принят!';
                $bookRecord = Book::find()->all();
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook1->id . '. Имя: ' . $modelBook1->name . '; Телефон: ' . $modelBook1->phone]);
                return $this->render('index', [
                    'modelBook' => $modelBook,
                    'modelBook1' => $modelBook1,
                    'modelContact' => $modelContact,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'footerseo' => $footerseo,
                    'message' => $message,
                ]);
            }
        }

        if ($modelContact->load(Yii::$app->request->post())) {
            $contactRecord = Contact::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($contactRecord); $i++) {
                if ($modelContact->name == $contactRecord[$i]->name && $modelContact->phone == $contactRecord[$i]->phone) {
                    $requestSent = true;
                    $message = 'Ваши контактные данные уже были отправлены ранее!';
                    return $this->render('index', [
                        'modelBook' => $modelBook,
                        'modelBook1' => $modelBook1,
                        'modelContact' => $modelContact,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'footerseo' => $footerseo,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelContact->save();
                $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
                return $this->render('index', [
                    'modelBook' => $modelBook,
                    'modelBook1' => $modelBook1,
                    'modelContact' => $modelContact,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'footerseo' => $footerseo,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('index', [
            'modelBook' => $modelBook,
            'modelBook1' => $modelBook1,
            'modelContact' => $modelContact,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'footerseo' => $footerseo,
            'message' => $message,
        ]);
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
        $modelContact = new Contact();
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('contact', [
                        'modelBook' => $modelBook,
                        'modelContact' => $modelContact,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                $bookRecord = Book::find()->all();
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('contact', [
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'modelContact' => $modelContact,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        if ($modelContact->load(Yii::$app->request->post())) {
            $contactRecord = Contact::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($contactRecord); $i++) {
                if ($modelContact->name == $contactRecord[$i]->name && $modelContact->phone == $contactRecord[$i]->phone) {
                    $requestSent = true;
                    $message = 'Ваши контактные данные уже были отправлены ранее!';
                    return $this->render('contact', [
                        'modelBook' => $modelBook,
                        'modelContact' => $modelContact,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelContact->save();
                $message = 'Ваши контактные данные №' . $modelContact->id . ' успешно приняты!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступили контактные данные №' . $modelContact->id . '. Имя: ' . $modelContact->name . '; Телефон: ' . $modelContact->phone]);
                return $this->render('contact', [
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'modelContact' => $modelContact,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('contact', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'modelContact' => $modelContact,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
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
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('blog', [
                        'dataProvider' => $dataProvider,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
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
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
            }
        }

        return $this->render('blog', [
            'dataProvider' => $dataProvider,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionArticle($url)
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('article', [
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                        'modelArticle' => Blog::findOne(['url' => $url]),
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('article', [
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                    'modelArticle' => Blog::findOne(['url' => $url]),
                ]);
            }
        }

        return $this->render('article', [
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
            'modelArticle' => Blog::findOne(['url' => $url]),
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

    public function actionAdminservices()
    {
        if (!Yii::$app->user->isGuest) {
            $searchModelServices = new ServiceSearch();
            $dataProviderServices = $searchModelServices->search(Yii::$app->request->queryParams);
            $pagesize = Pagesize::find()->all();
            $servicespagination = Pagination4::findOne(['id' => 4]);
            $dataProviderServices->pagination->pageSize = $servicespagination->pagesize;

            if ($servicespagination->load(Yii::$app->request->post()) && $servicespagination->save()) {
                $dataProviderServices->pagination->pageSize = $servicespagination->pagesize;
                return $this->render('adminservices', [
                    'dataProviderServices' => $dataProviderServices,
                    'searchModelServices' => $searchModelServices,
                    'pagesize' => $pagesize,
                    'servicespagination' => $servicespagination,
                ]);
            }

            return $this->render('adminservices', [
                'dataProviderServices' => $dataProviderServices,
                'searchModelServices' => $searchModelServices,
                'pagesize' => $pagesize,
                'servicespagination' => $servicespagination,
            ]);
        }
        return $this->redirect(['login']);
    }

    public function actionService($url)
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('service', [
                        'modelService' => Service::findOne(['url' => $url]),
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('service', [
                    'modelService' => Service::findOne(['url' => $url]),
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('service', [
            'modelService' => Service::findOne(['url' => $url]),
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionProgulkaNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'progulka-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('progulka-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('progulka-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('progulka-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionVecherinkaNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'vecherinka-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('vecherinka-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('vecherinka-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('vecherinka-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionDenRozhdeniaNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'den-rozhdenia-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('den-rozhdenia-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('den-rozhdenia-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('den-rozhdenia-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionBanketNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'banket-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('banket-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('banket-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('banket-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionKorporativNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'korporativ-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('korporativ-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('korporativ-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('korporativ-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
    }

    public function actionSvadbaNaTeplohode()
    {
        $modelBook = new Book();
        $ship = Ship::find()->all();
        $event = Event::find()->all();
        $guests = Guests::find()->all();
        $route = Route::find()->all();
        $modelService = Service::findOne(['url' => 'svadba-na-teplohode']);
        $bookRecord = Book::find()->all();
        $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
        $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);
        $message = '';

        if ($modelBook->load(Yii::$app->request->post())) {
            $bookRecord = Book::find()->all();
            $requestSent = false;
            for ($i = 0; $i < count($bookRecord); $i++) {
                if ($modelBook->bookdate == $bookRecord[$i]->bookdate && $modelBook->booktime == $bookRecord[$i]->booktime) {
                    $requestSent = true;
                    $message = 'Ваш запрос уже был отправлен ранее!';
                    return $this->render('svadba-na-teplohode', [
                        'modelService' => $modelService,
                        'modelBook' => $modelBook,
                        'ship' => $ship,
                        'event' => $event,
                        'guests' => $guests,
                        'route' => $route,
                        'bookRecord' => $bookRecord,
                        'schedule1' => $schedule1,
                        'schedule2' => $schedule2,
                        'message' => $message,
                    ]);
                }
            }
            if (!$requestSent) {
                $modelBook->save();
                $message = 'Ваш заказ №' . $modelBook->id . ' успешно принят!';
                Yii::$app->telegram->sendMessage(['chat_id' => '393320392',
                    'text' => 'Поступил заказ №' . $modelBook->id . '. Имя: ' . $modelBook->name . '; Телефон: ' . $modelBook->phone]);
                return $this->render('svadba-na-teplohode', [
                    'modelService' => $modelService,
                    'modelBook' => $modelBook,
                    'ship' => $ship,
                    'event' => $event,
                    'guests' => $guests,
                    'route' => $route,
                    'bookRecord' => $bookRecord,
                    'schedule1' => $schedule1,
                    'schedule2' => $schedule2,
                    'message' => $message,
                ]);
            }
        }

        return $this->render('svadba-na-teplohode', [
            'modelService' => $modelService,
            'modelBook' => $modelBook,
            'ship' => $ship,
            'event' => $event,
            'guests' => $guests,
            'route' => $route,
            'bookRecord' => $bookRecord,
            'schedule1' => $schedule1,
            'schedule2' => $schedule2,
            'message' => $message,
        ]);
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

    public function actionCreateservice()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new Service();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewservice', 'id' => $model->id]);
            }

            return $this->render('createservice', [
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

    public function actionViewservice($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewservice', [
                'model' => Service::findOne(['id' => $id]),
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
            $bookRecord = Book::find()->all();
            $schedule1 = Schedule::findAll([1,2,3,4,5,6,7,8]);
            $schedule2 = Schedule::findAll([9,10,11,12,13,14,15,16]);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewbook', 'id' => $model->id]);
            }

            return $this->render('updatebook', [
                'model' => $model,
                'ship' => $ship,
                'event' => $event,
                'guests' => $guests,
                'route' => $route,
                'bookRecord' => $bookRecord,
                'schedule1' => $schedule1,
                'schedule2' => $schedule2,
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

    public function actionUpdateservice($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = Service::findOne(['id' => $id]);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewservice', 'id' => $model->id]);
            }

            return $this->render('updateservice', [
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

    public function actionDeleteservice($id)
    {
        if (!Yii::$app->user->isGuest) {
            Service::findOne(['id' => $id])->delete();

            return $this->redirect(['adminservices']);
        }
        return $this->redirect(['login']);
    }
}