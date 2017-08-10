<?php
    return [
        'id' => 'school',
        'basePath' => realpath(__DIR__ . '/../'),
        'defaultRoute' => 'home/index',
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false
            ],
            'user' => [
                'identityClass' => 'app\models\UserIdentity'
            ],
            'request' => [
                'cookieValidationKey' => 'super secret code'
            ],
            'db' => require(__DIR__ . '/db.php')
        ],
    ];