<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "military_compare_total".
 *
 * @property string $type
 * @property int|null $active_military_personnel
 * @property int|null $aircraft
 * @property int|null $armored_vehicles
 * @property int|null $naval_fleet
 * @property int|null $nuclear_warheads
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
            [['type'], 'required'],
            [['active_military_personnel', 'aircraft', 'armored_vehicles', 'naval_fleet', 'nuclear_warheads'], 'integer'],
            [['type'], 'string', 'max' => 10],
            [['type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type' => 'Type',
            'active_military_personnel' => 'Active Military Personnel',
            'aircraft' => 'Aircraft',
            'armored_vehicles' => 'Armored Vehicles',
            'naval_fleet' => 'Naval Fleet',
            'nuclear_warheads' => 'Nuclear Warheads',
        ];
    }
}
