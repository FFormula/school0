<?php
    return [
        'id' => 'school',
        'basePath' => realpath(__DIR__ . '/../'),
        'defaultRoute' => 'home/index',
        'components' => [
            'request' => [
                'cookieValidationKey' => 'super secret code'
            ],
        ]
    ];