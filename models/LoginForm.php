<?php

namespace app\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $remember;

    /** @var UserIdentity */
    public $user;
    private function getUser ($username)
    {
        if (!$this->user)
            $this->user = UserIdentity::findIdentityByUsername($username);
        return $this->user;
    }

    public function rules()
    {
        return [
            ['username', 'required'],
            ['password', 'required'],
            ['remember', 'boolean'],
//            ['password', 'validatePassword']
        ];
    }

    public function login()
    {
        if (!$this->validate())
            return false;

        $user = $this -> getUser($this->username);
        if (!$user)
            return false;

        return \Yii::$app->user->login(
            $user,
            $this->remember ? 3600 * 24 * 30 : 0
        );
    }
}