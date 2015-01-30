<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LabItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'hos_id') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'item_group') ?>

    <?= $form->field($model, 'item_size') ?>

    <?php // echo $form->field($model, 'item_size_desc') ?>

    <?php // echo $form->field($model, 'item_price') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
