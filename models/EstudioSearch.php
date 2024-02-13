<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estudio;

/**
 * EstudioSearch represents the model behind the search form of `app\models\Estudio`.
 */
class EstudioSearch extends Estudio
{

    public function attributes()
    {
        return array_merge(parent::attributes(), ['jogos.Nome']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Nome'], 'safe'],
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
        $query = Estudio::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('jogos');
        $dataProvider->sort->attributes['jogos.Nome'] = [
            'asc' => ['jogos.Nome' => SORT_ASC],
            'desc' => ['jogos.Nome' => SORT_DESC],
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'estudio.Nome', $this->Nome]);

        return $dataProvider;
    }
}
