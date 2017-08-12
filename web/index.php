<?php

define ('YII_DEBUG', true);
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = [];

$app = new yii\web\Application($config);
$app -> run();

?>