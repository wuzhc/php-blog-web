<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'language' => 'zh-CN',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'suffix' => '.html',
//            'rules' => [
//                '<controller:[-\w]+>/<action:[-\w]+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:[-\w]+>/<action:[-\w]+>' => '<controller>/<action>',
//            ],
//        ],
        'assetManager' => [
            'basePath' => '@webroot/backend/web/assets',
            'baseUrl' => '@web/backend/web/assets'
        ],
    ],
    'params' => $params,
];
