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
use yii\helpers\Url;

/**
 * @var yii\web\View              $this
 * @var dektrium\user\models\User $user
 * @var dektrium\user\Module      $module
 */
$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="form-box" id="login-box">
            <div class="panel panel-default">
                <img id="logo" class="img-circle" src="<? echo Url::base();?>/img/avatar.svg" />
                <h3 style="margin-top: 7px;">Registration</h3>
                <h4></h4>
                <div class="panel-body">
                    <?php
                    $form = ActiveForm::begin([
                                'id' => 'registration-form',
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => false
                    ]);
                    ?>

                    <?= $form->field($model, 'username',['inputOptions'=>['class'=>'form-control input-lg','placeholder'=>'Username']])->label(FALSE) ?>

                    <?= $form->field($model, 'email',['inputOptions'=>['class'=>'form-control input-lg','placeholder'=>'Email']])->label(FALSE) ?>

                    <?php if ($module->enableGeneratingPassword == false): ?>
                        <?= $form->field($model, 'password',['inputOptions'=>['class'=>'form-control input-lg','placeholder'=>'Password']])->passwordInput()->label(FALSE) ?>
                    <?php endif ?>

                    <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block btn-lg']) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <p class="text-center">
                <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
            </p>
        </div>
    </div>
</div>
