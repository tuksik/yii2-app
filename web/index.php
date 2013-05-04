<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

require(__DIR__ . '/../vendor/yiisoft/yii2/framework/yii.php');

$config = require(__DIR__ . '/../app/config/main.php');
$application = new yii\web\Application($config);
$application->run();
