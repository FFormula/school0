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
        $userRecord = new UserRecord();
        if ($userRecord->load($_POST))
        {
            $userRecord->save();
            return $this->redirect("/home/index");
        }
        return $this->render('join', [ "user" => $userRecord ]);
    }

    public function actionLogin ()
    {
        $userRecord = new UserRecord();
        if ($userRecord->load($_POST))
        {
//            $userRecord->save();
            return $this->redirect("/home/index");
        }
        return $this->render('login', [ "user" => $userRecord ]);
    }
}