<?php

use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules ()
    {
        return [
            ['id', 'number'],
            ['email', 'required'],
            ['password', 'required'],
            ['status', 'number']
        ];
    }

    public function store (User $user)
    {
        $this->id = $user->id;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->status = $user->status;
        $this->save();
    }
}