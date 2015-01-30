<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_item".
 *
 * @property integer $item_id
 * @property integer $hos_id
 * @property string $item_name
 * @property string $item_group
 * @property string $item_size
 * @property string $item_size_desc
 * @property integer $item_price
 * @property string $create_date
 * @property string $last_update
 */
class LabItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hos_id', 'item_name', 'item_group', 'item_size', 'item_size_desc', 'item_price', 'last_update'], 'required'],
            [['hos_id', 'item_price'], 'integer'],
            [['create_date', 'last_update'], 'safe'],
            [['item_name', 'item_group', 'item_size_desc'], 'string', 'max' => 50],
            [['item_size'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'hos_id' => 'Hos ID',
            'item_name' => 'Item Name',
            'item_group' => 'Item Group',
            'item_size' => 'Item Size',
            'item_size_desc' => 'Item Size Desc',
            'item_price' => 'Item Price',
            'create_date' => 'Create Date',
            'last_update' => 'Last Update',
        ];
    }
}
