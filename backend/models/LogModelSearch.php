<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LogModel;

/**
 * LogModelSearch represents the model behind the search form of `app\models\LogModel`.
 */
class LogModelSearch extends LogModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_log'], 'integer'],
            [['timestamp', 'action', 'user'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = LogModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_log' => $this->id_log,
        ]);

        $query->andFilterWhere(['like', 'timestamp', $this->timestamp])
            ->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
