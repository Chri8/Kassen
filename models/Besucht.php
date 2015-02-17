<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "besucht".
 *
 * @property integer $besucher_ID
 * @property integer $Vorstellung_ID
 *
 * @property Vorstellung $vorstellung
 * @property Besucher $besucher
 */
class Besucht extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'besucht';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['besucher_ID', 'Vorstellung_ID'], 'required'],
            [['besucher_ID', 'Vorstellung_ID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'besucher_ID' => 'Besucher  ID',
            'Vorstellung_ID' => 'Vorstellung  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVorstellung()
    {
        return $this->hasOne(Vorstellung::className(), ['ID' => 'Vorstellung_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBesucher()
    {
        return $this->hasOne(Besucher::className(), ['ID' => 'besucher_ID']);
    }
}
