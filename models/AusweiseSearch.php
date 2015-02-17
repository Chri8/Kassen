<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ausweise;

/**
 * AusweiseSearch represents the model behind the search form about `app\models\Ausweise`.
 */
class AusweiseSearch extends Ausweise
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'erstellt', 'istAktiv'], 'safe'],
            [['besucher_id'], 'integer'],
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
        $query = Ausweise::find();

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
            'besucher_id' => $this->besucher_id,
            'erstellt' => $this->erstellt,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'istAktiv', $this->istAktiv]);

        return $dataProvider;
    }
}
