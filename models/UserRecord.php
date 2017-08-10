<?php

namespace app\models;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['email', 'required'],
            ['password', 'required'],
            ['status', 'number']
        ];
    }

    public function setUser(User $user)
    {
        $this->id = $user->id;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->status = $user->status;
    }

    public function getUser()
    {
        $user = new User();
        $user->id = $this->id;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->status = $this->status;
        return $user;
    }
}