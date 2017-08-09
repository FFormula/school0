<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->title ?></title>
        <?php $this->head() ?>

    </head>
    <body>
<?php $this->beginBody() ?>

<div class="wrap">
<?php
    NavBar::begin([
            'brandLabel' => 'VideoSchool',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default navbar-fixed-top'
            ]
        ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Join', 'url' => ['/home/join']],
            ['label' => 'Login', 'url' => ['/home/login']]
        ]
    ]);
    NavBar::end(); ?>

    <br/><br/><br/>
    <div class="container">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>

