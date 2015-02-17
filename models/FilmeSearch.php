<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filme;

/**
 * FilmeSearch represents the model behind the search form about `app\models\Filme`.
 */
class FilmeSearch extends Filme
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'erschienen', 'fsk'], 'integer'],
            [['name', 'typ', 'website', 'kurzbeschreibung', 'beschreibung', 'poster', 'trailer', 'dauer', 'land', 'regisseur', 'schauspieler'], 'safe'],
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
        $query = Filme::find();

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
            'erschienen' => $this->erschienen,
            'dauer' => $this->dauer,
            'fsk' => $this->fsk,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'typ', $this->typ])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'kurzbeschreibung', $this->kurzbeschreibung])
            ->andFilterWhere(['like', 'beschreibung', $this->beschreibung])
            ->andFilterWhere(['like', 'poster', $this->poster])
            ->andFilterWhere(['like', 'trailer', $this->trailer])
            ->andFilterWhere(['like', 'land', $this->land])
            ->andFilterWhere(['like', 'regisseur', $this->regisseur])
            ->andFilterWhere(['like', 'schauspieler', $this->schauspieler]);

        return $dataProvider;
    }
}
