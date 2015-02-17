<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Filme".
 *
 * @property integer $ID
 * @property string $name
 * @property string $typ
 * @property string $website
 * @property string $kurzbeschreibung
 * @property string $beschreibung
 * @property string $poster
 * @property string $trailer
 * @property integer $erschienen
 * @property string $dauer
 * @property string $land
 * @property integer $fsk
 * @property string $regisseur
 * @property string $schauspieler
 *
 * @property Vorstellung[] $vorstellungs
 */
class Filme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Filme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['beschreibung'], 'string'],
            [['erschienen', 'fsk'], 'integer'],
            [['dauer'], 'safe'],
            [['name', 'typ'], 'string', 'max' => 64],
            [['website', 'kurzbeschreibung', 'poster', 'trailer', 'land', 'regisseur', 'schauspieler'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'typ' => 'Typ',
            'website' => 'Website',
            'kurzbeschreibung' => 'Kurzbeschreibung',
            'beschreibung' => 'Beschreibung',
            'poster' => 'Poster',
            'trailer' => 'Trailer',
            'erschienen' => 'Erschienen',
            'dauer' => 'Dauer',
            'land' => 'Land',
            'fsk' => 'Fsk',
            'regisseur' => 'Regisseur',
            'schauspieler' => 'Schauspieler',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVorstellungs()
    {
        return $this->hasMany(Vorstellung::className(), ['film_id' => 'ID']);
    }
}
