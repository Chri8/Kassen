<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Vorstellung".
 *
 * @property integer $ID
 * @property integer $film_id
 * @property string $tag
 * @property string $zeit
 *
 * @property Filme $film
 * @property Besucht[] $besuchts
 * @property Besucher[] $besuchers
 */
class Vorstellung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Vorstellung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['film_id', 'tag', 'zeit'], 'required'],
            [['film_id'], 'integer'],
            [['tag', 'zeit'], 'safe'],
            [['film_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'film_id' => 'Film ID',
            'tag' => 'Tag',
            'zeit' => 'Zeit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Filme::className(), ['ID' => 'film_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBesuchts()
    {
        return $this->hasMany(Besucht::className(), ['Vorstellung_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBesuchers()
    {
        return $this->hasMany(Besucher::className(), ['ID' => 'besucher_ID'])->viaTable('besucht', ['Vorstellung_ID' => 'ID']);
    }
}
