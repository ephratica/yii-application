<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "se_status".
 *
 * @property string $date
 * @property float|null $natural_gas
 * @property float|null $gold
 * @property float|null $wti_crude
 * @property float|null $brent_crude
 * @property float|null $soybeans
 * @property float|null $corn
 * @property float|null $copper
 * @property float|null $silver
 * @property float|null $low_sulphur_gas_oil
 * @property float|null $live_cattle
 * @property float|null $soybean_oil
 * @property float|null $aluminium
 * @property float|null $soybean_meal
 * @property float|null $zinc
 * @property float|null $uls_diesel
 * @property float|null $nickel
 * @property float|null $wheat
 * @property float|null $sugar
 * @property float|null $gasoline
 * @property float|null $coffee
 * @property float|null $lean_hogs
 * @property float|null $hrw_wheat
 * @property float|null $cotton
 */
class SeStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'se_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['natural_gas', 'gold', 'wti_crude', 'brent_crude', 'soybeans', 'corn', 'copper', 'silver', 'low_sulphur_gas_oil', 'live_cattle', 'soybean_oil', 'aluminium', 'soybean_meal', 'zinc', 'uls_diesel', 'nickel', 'wheat', 'sugar', 'gasoline', 'coffee', 'lean_hogs', 'hrw_wheat', 'cotton'], 'number'],
            [['date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'natural_gas' => 'Natural Gas',
            'gold' => 'Gold',
            'wti_crude' => 'Wti Crude',
            'brent_crude' => 'Brent Crude',
            'soybeans' => 'Soybeans',
            'corn' => 'Corn',
            'copper' => 'Copper',
            'silver' => 'Silver',
            'low_sulphur_gas_oil' => 'Low Sulphur Gas Oil',
            'live_cattle' => 'Live Cattle',
            'soybean_oil' => 'Soybean Oil',
            'aluminium' => 'Aluminium',
            'soybean_meal' => 'Soybean Meal',
            'zinc' => 'Zinc',
            'uls_diesel' => 'Uls Diesel',
            'nickel' => 'Nickel',
            'wheat' => 'Wheat',
            'sugar' => 'Sugar',
            'gasoline' => 'Gasoline',
            'coffee' => 'Coffee',
            'lean_hogs' => 'Lean Hogs',
            'hrw_wheat' => 'Hrw Wheat',
            'cotton' => 'Cotton',
        ];
    }
}
