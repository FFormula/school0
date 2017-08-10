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
    private function getUserIdentity ($username)
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
            ['password', 'validatePassword']
        ];
    }

    public function login()
    {
        if (!$this->validate())
            return false;

        $user = $this -> getUserIdentity($this->username);
        if (!$user)
            return false;

        return \Yii::$app->user->login(
            $user,
            $this->remember ? 3600 * 24 * 30 : 0
        );
    }

    public function validatePassword($password)
    {
        if ($this->hasErrors())
            return;

        $user = $this -> getUserIdentity($this->username);
        if (!($user and $this->isCorrectHash($this->password, $user->password)))
            $this -> addError ('password', 'Incorrect username or password');
    }

    public function isCorrectHash ($password, $hash)
    {
        return \Yii::$app->security->validatePassword($password, $hash);
    }
}