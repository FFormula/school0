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
            'request' => [
                'cookieValidationKey' => 'super secret code'
            ],
        ]
    ];