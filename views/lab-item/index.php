<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lab Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lab Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item_id',
            'hos_id',
            'item_name',
            'item_group',
            'item_size',
            // 'item_size_desc',
            // 'item_price',
            // 'create_date',
            // 'last_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
