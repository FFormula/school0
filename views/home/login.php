<p hidden>views.home.login</p>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Login</h1>

<div class="">

    <?php $form = ActiveForm::begin([
        'id' => 'login-user-form'
    ]); ?>

    <?= $form->field($login, 'username') ?>
    <?= $form->field($login, 'password')->passwordInput() ?>
    <?= $form->field($login, 'remember')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Login',
            ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>