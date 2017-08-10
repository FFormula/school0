<?php

namespace app\controllers;
use app\models\LoginForm;
use app\models\User;
use app\models\UserIdentity;
use app\models\UserRecord;
use \yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex ()
    {
        return $this->render('index');
    }

    public function actionJoin ()
    {
        $userRecord = new UserRecord();
//        $user = new User ();
//        $user->username = "John";
//        $user->password = "qwas";
//        $user->authokey = "1234";
//        $userRecord->setUser($user);

        if ($userRecord->load($_POST))
        {
            $userRecord->save();
            return $this->redirect("/home/index");
        }
        return $this->render('join', [ "user" => $userRecord ]);
    }

    public function actionLogin ()
    {
        return $this->justLogin();
        if (!\Yii::$app->user->isGuest)
            return $this->goHome();

        $login = new LoginForm();
        if ($login->load(\Yii::$app->request->post()) and $login->login())
            return $this->goBack();

        return $this->render('login', ["login" => $login]);
    }

    private function justLogin()
    {
        $user = new User ();
        $user->id = 1;
        $userIdentity = new UserIdentity();
        $userIdentity->setUser($user);

        \Yii::$app->user->login($userIdentity, 3600 * 24 * 30);
        return $this->goHome();
    }

    public function actionLogout ()
    {
        \Yii::$app->user->logout();
        return $this->goHome();
    }
}