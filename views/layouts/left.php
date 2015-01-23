<?php
use yii\bootstrap\Nav;
$user = Yii::$app->user->identity;
?>
<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <div class="pull-left image">
                  <img src="http://gravatar.com/avatar/<?= $user->profile->gravatar_id ?>?s=80" class="img-circle" alt="<?= $user->username ?>"/>
                </div>
                <div class="pull-left info">
                    <p>Hello, <?= @Yii::$app->user->identity->username ?></p>
                    <a href="<?= $directoryAsset ?>/#">
                        <i class="fa fa-circle text-success"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>

<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                                        class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>-->

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '<span class="fa fa-dashboard"></span> Dashboard', 'url' => ['/site/index']],

                    ['label' => 'Register', 'url' => ['/register'], 'visible'=>Yii::$app->user->isGuest],
                    ['label' => 'Profile', 'url' => ['/user/settings/profile'], 'visible'=>!Yii::$app->user->isGuest],
                    ['label' => 'Account', 'url' => ['/user/settings/account'], 'visible'=>!Yii::$app->user->isGuest],
                    Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/logout'],
                    'linkOptions' => ['data-method' => 'post']],
                ],
            ]
        );
        ?>



    </section>

</aside>
