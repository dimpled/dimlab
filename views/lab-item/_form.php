<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LabItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hos_id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'item_group')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'item_size')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'item_size_desc')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'item_price')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
