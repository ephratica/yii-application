<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "se_status".
 *
 * @property string $Date
 * @property float|null $NATURAL_GAS
 * @property float|null $GOLD
 * @property float|null $WTI_CRUDE
 * @property float|null $BRENT_CRUDE
 * @property float|null $SOYBEANS
 * @property float|null $CORN
 * @property float|null $COPPER
 * @property float|null $SILVER
 * @property float|null $LOW_SULPHUR_GAS_OIL
 * @property float|null $LIVE_CATTLE
 * @property float|null $SOYBEAN_OIL
 * @property float|null $ALUMINIUM
 * @property float|null $SOYBEAN_MEAL
 * @property float|null $ZINC
 * @property float|null $ULS_DIESEL
 * @property float|null $NICKEL
 * @property float|null $WHEAT
 * @property float|null $SUGAR
 * @property float|null $GASOLINE
 * @property float|null $COFFEE
 * @property float|null $LEAN_HOGS
 * @property float|null $HRW_WHEAT
 * @property float|null $COTTON
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
            [['Date'], 'required'],
            [['Date'], 'safe'],
            [['NATURAL_GAS', 'GOLD', 'WTI_CRUDE', 'BRENT_CRUDE', 'SOYBEANS', 'CORN', 'COPPER', 'SILVER', 'LOW_SULPHUR_GAS_OIL', 'LIVE_CATTLE', 'SOYBEAN_OIL', 'ALUMINIUM', 'SOYBEAN_MEAL', 'ZINC', 'ULS_DIESEL', 'NICKEL', 'WHEAT', 'SUGAR', 'GASOLINE', 'COFFEE', 'LEAN_HOGS', 'HRW_WHEAT', 'COTTON'], 'number'],
            [['Date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Date' => 'Date',
            'NATURAL_GAS' => 'Natural Gas',
            'GOLD' => 'Gold',
            'WTI_CRUDE' => 'Wti Crude',
            'BRENT_CRUDE' => 'Brent Crude',
            'SOYBEANS' => 'Soybeans',
            'CORN' => 'Corn',
            'COPPER' => 'Copper',
            'SILVER' => 'Silver',
            'LOW_SULPHUR_GAS_OIL' => 'Low Sulphur Gas Oil',
            'LIVE_CATTLE' => 'Live Cattle',
            'SOYBEAN_OIL' => 'Soybean Oil',
            'ALUMINIUM' => 'Aluminium',
            'SOYBEAN_MEAL' => 'Soybean Meal',
            'ZINC' => 'Zinc',
            'ULS_DIESEL' => 'Uls Diesel',
            'NICKEL' => 'Nickel',
            'WHEAT' => 'Wheat',
            'SUGAR' => 'Sugar',
            'GASOLINE' => 'Gasoline',
            'COFFEE' => 'Coffee',
            'LEAN_HOGS' => 'Lean Hogs',
            'HRW_WHEAT' => 'Hrw Wheat',
            'COTTON' => 'Cotton',
        ];
    }
}
