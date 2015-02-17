<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vorstellung;

/**
 * VorstellungSearch represents the model behind the search form about `app\models\Vorstellung`.
 */
class VorstellungSearch extends Vorstellung
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'film_id'], 'integer'],
            [['tag', 'zeit'], 'safe'],
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
        $query = Vorstellung::find();

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
            'ID' => $this->ID,
            'film_id' => $this->film_id,
            'tag' => $this->tag,
            'zeit' => $this->zeit,
        ]);

        return $dataProvider;
    }
}
