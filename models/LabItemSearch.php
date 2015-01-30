<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LabItem;

/**
 * LabItemSearch represents the model behind the search form about `app\models\LabItem`.
 */
class LabItemSearch extends LabItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'hos_id', 'item_price'], 'integer'],
            [['item_name', 'item_group', 'item_size', 'item_size_desc', 'create_date', 'last_update'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LabItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'item_id' => $this->item_id,
            'hos_id' => $this->hos_id,
            'item_price' => $this->item_price,
            'create_date' => $this->create_date,
            'last_update' => $this->last_update,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'item_group', $this->item_group])
            ->andFilterWhere(['like', 'item_size', $this->item_size])
            ->andFilterWhere(['like', 'item_size_desc', $this->item_size_desc]);

        return $dataProvider;
    }
}
