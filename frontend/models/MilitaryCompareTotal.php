<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "military_compare_total".
 *
 * @property string $Type
 * @property int|null $Active_military_personnel
 * @property int|null $Aircraft
 * @property int|null $Armored_vehicles
 * @property int|null $Naval_fleet
 * @property int|null $Nuclear_warheads
 */
class MilitaryCompareTotal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'military_compare_total';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type'], 'required'],
            [['Active_military_personnel', 'Aircraft', 'Armored_vehicles', 'Naval_fleet', 'Nuclear_warheads'], 'integer'],
            [['Type'], 'string', 'max' => 255],
            [['Type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Type' => 'Type',
            'Active_military_personnel' => 'Active Military Personnel',
            'Aircraft' => 'Aircraft',
            'Armored_vehicles' => 'Armored Vehicles',
            'Naval_fleet' => 'Naval Fleet',
            'Nuclear_warheads' => 'Nuclear Warheads',
        ];
    }
}
