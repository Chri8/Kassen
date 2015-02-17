<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ausweise".
 *
 * @property string $ID
 * @property integer $besucher_id
 * @property string $erstellt
 * @property string $istAktiv
 *
 * @property Besucher $besucher
 */
class Ausweise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ausweise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'besucher_id', 'erstellt', 'istAktiv'], 'required'],
            [['besucher_id'], 'integer'],
            [['erstellt'], 'safe'],
            [['istAktiv'], 'string'],
            [['ID'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'besucher_id' => 'Besucher ID',
            'erstellt' => 'Erstellt',
            'istAktiv' => 'Ist Aktiv',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBesucher()
    {
        return $this->hasOne(Besucher::className(), ['ID' => 'besucher_id']);
    }
}
