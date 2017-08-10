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
            ['username', 'required'],
            ['password', 'required']
        ];
    }

    public function beforeSave($insert)
    {
        $return = parent::beforeSave($insert);
        if ($this->isAttributeChanged('password'))
            $this->password = \Yii::$app->security->generatePasswordHash($this->password);
        if ($this->isNewRecord)
            $this->authokey = \Yii::$app->security->generateRandomString(128);
        return $return;
    }

    public function setUser(User $user)
    {
        $this->id = $user->id;
        $this->username = $user->username;
        $this->password = $user->password;
        $this->authokey = $user->authokey;
    }

    public function getUser()
    {
        $user = new User();
        $user->id = $this->id;
        $user->username = $this->username;
        $user->password = $this->password;
        $user->authokey = $this->authokey;
        return $user;
    }
}