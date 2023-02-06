<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ukraine_civilian_casualties".
 *
 * @property string $Killed_Injured
 * @property int|null $Total
 * @property int|null $Children
 */
class UkraineCivilianCasualties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukraine_civilian_casualties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Killed_Injured'], 'required'],
            [['Total', 'Children'], 'integer'],
            [['Killed_Injured'], 'string', 'max' => 255],
            [['Killed_Injured'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Killed_Injured' => 'Killed Injured',
            'Total' => 'Total',
            'Children' => 'Children',
        ];
    }
}
