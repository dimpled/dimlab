<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dektrium\user\widgets\Connect;
use yii\helpers\Url;

/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;

?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-box" id="login-box">
        <div class="panel panel-default">
            <img id="logo" class="img-circle" src="<? echo Url::base();?>/img/avatar.svg" />
            <div class="panel-body">
              <h3 style="margin-top: 7px;">DIMLAB</h3>
                <?php $form = ActiveForm::begin([
                    'id'                     => 'login-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                    'validateOnType'         => false,
                    'validateOnChange'       => false,
                ]) ?>

                <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control input-lg', 'tabindex' => '1','placeholder'=>'Username']])->label(FALSE) ?>

                <?php //$form->field($model, 'password', ['inputOptions' => ['class' => 'form-control input-lg', 'tabindex' => '2','placeholder'=>'Password']])->passwordInput()->label(Yii::t('user', 'Password') . ' (' . Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']) . ')') ?>
                <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control input-lg', 'tabindex' => '2','placeholder'=>'Password']])->passwordInput()->label(FALSE) ?>

                <?php // $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>

                <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-success btn-block btn-lg', 'tabindex' => '3']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <?php if ($module->enableConfirmation): ?>
            <p class="text-center">
                <?= Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']); ?>
                <?php // Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
            </p>
        <?php endif ?>
            
        <?= Connect::widget([
            'baseAuthUrl' => ['/user/security/auth']
        ]) ?>
            
        </div>  </div>
</div>


