<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LabItem */

$this->title = 'Create Lab Item';
$this->params['breadcrumbs'][] = ['label' => 'Lab Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
