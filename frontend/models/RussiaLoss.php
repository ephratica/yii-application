<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the model class for table "russia_loss".
*/

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "russia_loss".
 *
 * @property string $date
 * @property int|null $tank
 * @property int|null $bbm
 * @property int|null $artillery
 * @property int|null $multi_barrel_rocket_launcher
 * @property int|null $air_defense_system
 * @property int|null $fixed_wing_aircraft
 * @property int|null $helicopter
 * @property int|null $uav
 * @property int|null $cruise_missile
 * @property int|null $ships
 * @property int|null $automobile_and_oil_tanker
 * @property int|null $special_equipment
 * @property int|null $personnel_total
 * @property int|null $personnel_increase
 */
class RussiaLoss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'russia_loss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['tank', 'bbm', 'artillery', 'multi_barrel_rocket_launcher', 'air_defense_system', 'fixed_wing_aircraft', 'helicopter', 'uav', 'cruise_missile', 'ships', 'automobile_and_oil_tanker', 'special_equipment', 'personnel_total', 'personnel_increase'], 'integer'],
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
            'tank' => 'Tank',
            'bbm' => 'Bbm',
            'artillery' => 'Artillery',
            'multi_barrel_rocket_launcher' => 'Multi Barrel Rocket Launcher',
            'air_defense_system' => 'Air Defense System',
            'fixed_wing_aircraft' => 'Fixed Wing Aircraft',
            'helicopter' => 'Helicopter',
            'uav' => 'Uav',
            'cruise_missile' => 'Cruise Missile',
            'ships' => 'Ships',
            'automobile_and_oil_tanker' => 'Automobile And Oil Tanker',
            'special_equipment' => 'Special Equipment',
            'personnel_total' => 'Personnel Total',
            'personnel_increase' => 'Personnel Increase',
        ];
    }
}
