<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LabItem */

$this->title = 'Update Lab Item: ' . ' ' . $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Lab Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_id, 'url' => ['view', 'id' => $model->item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lab-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
