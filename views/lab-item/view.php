<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LabItem */

$this->title = $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Lab Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->item_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item_id',
            'hos_id',
            'item_name',
            'item_group',
            'item_size',
            'item_size_desc',
            'item_price',
            'create_date',
            'last_update',
        ],
    ]) ?>

</div>
