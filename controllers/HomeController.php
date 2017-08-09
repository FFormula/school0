<?php

namespace app\controllers;
use app\models\User;
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
        $user = new User();
        $user->email = "fformula@gmail.com";
        $user->password = "qwas";
        $user->status = 10;
        $userRecord = new UserRecord();
        $userRecord -> setUser ($user);
//        $userRecord->store($user);
        return $this->render('join', [ "user" => $userRecord ]);
    }

    public function actionLogin ()
    {
        return $this->render('login');
    }
}