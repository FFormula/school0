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

<?php
    NavBar::begin([
            'brandLabel' => 'VideoSchool',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top'
            ]
        ]);
    NavBar::end(); ?>


        <?= $content ?>

<?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>

