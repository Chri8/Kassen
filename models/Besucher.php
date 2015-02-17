<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Besucher".
 *
 * @property integer $ID
 * @property string $ersterBesuch
 * @property string $letzterBesuch
 *
 * @property Ausweise[] $ausweises
 * @property Besucht[] $besuchts
 * @property Vorstellung[] $vorstellungs
 */
class Besucher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Besucher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ersterBesuch', 'letzterBesuch'], 'required'],
            [['ersterBesuch', 'letzterBesuch'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ersterBesuch' => 'Erster Besuch',
            'letzterBesuch' => 'Letzter Besuch',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAusweises()
    {
        return $this->hasMany(Ausweise::className(), ['besucher_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBesuchts()
    {
        return $this->hasMany(Besucht::className(), ['besucher_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVorstellungs()
    {
        return $this->hasMany(Vorstellung::className(), ['ID' => 'Vorstellung_ID'])->viaTable('besucht', ['besucher_ID' => 'ID']);
    }
}
