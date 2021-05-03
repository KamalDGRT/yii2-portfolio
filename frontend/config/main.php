<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                // Guest User
                '/' => '/site/index',
                '/dashboard' => '/site/dashboard',
                '/signup' => '/site/signup',
                '/login' => '/site/login',

                // Normal User
                '/aboutme/update/<id>' => '/aboutme/update',
                '/contact/update/<id>' => '/contact/update',
                '/skill/update/<id>' => '/skill/update',
                '/education/update/<id>' => '/education/update',
                '/testimonial/update/<id>' => '/testimonial/update',
                '/achievement/update/<id>' => '/achievement/update',
                '/experience/update/<id>' => '/experience/update',
                '/company/update/<id>' => '/company/update',
                '/project/update/<id>' => '/project/update',
                '/social/update/<id>' => '/social/update',
                '/integration/update/<id>' => '/integration/update',
                '/profilepic/update/<id>' => '/profilepic/update',
                '/profilepic/view/<id>' => '/profilepic/view',
                '/companylogo/update/<id>' => '/companylogo/update',
                '/companylogo/view/<id>' => '/companylogo/view',
                '/user/<username:[a-zA-Z0-9_-]+>'=>'/theme/view',
                '/download' => '/theme/download',
            ],
        ],

        'assetManager' => [
            'appendTimestamp' => true
        ]
    ],
    'params' => $params,
];
