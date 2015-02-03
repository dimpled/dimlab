<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name'=>'DIMLAB',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules'=>[
      'user' => [
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => true,
        'confirmWithin' => 21600,
        'cost' => 12,
        'admins' => ['admin'],
        'mailer' => [
          'sender' => ['no-reply@dimlab.com'=>'DIMLAB'], // or ['no-reply@myhost.com' => 'Sender name']
          // 'welcomeSubject'        => 'Welcome to DIMLAB',
          // 'confirmationSubject'   => 'Confirmation subject',
          // 'reconfirmationSubject' => 'Email change subject',
          // 'recoverySubject'       => 'Recovery subject',
        ],
      ],
    ],
    'components' => [
      'view' => [
        'theme' => [
          'pathMap' => [
            '@dektrium/user/views' => '@app/views/user'
          ],
        ],
      ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ixMFKxpAqJ4eoeHyXyXNpbanU08548Bu',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\User',
        //     'enableAutoLogin' => true,
        // ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
          'class' => 'yii\web\UrlManager',
          'enablePrettyUrl' => true,
          'showScriptName' => false,
          'rules' => [
            'register'=>'/user/registration/register',
            'login' => '/user/security/login',
            'logout' => '/user/security/logout',
          ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
              'class' => 'Swift_SmtpTransport',
              'host' => 'smtp.mandrillapp.com',
              'username' => 'dixonsatit@gmail.com',
              'password' => 'e0WBDbWpBO9oCPNqMqxXIw',
              'port' => '587',
              'encryption' => 'tls',
            ],
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
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
