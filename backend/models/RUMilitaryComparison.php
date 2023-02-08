<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "r_u_military_comparison".
 *
 * @property string $Indicator
 * @property int|null $Russia
 * @property int|null $Ukraine
 */
class RUMilitaryComparison extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'r_u_military_comparison';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Indicator'], 'required'],
            [['Russia', 'Ukraine'], 'integer'],
            [['Indicator'], 'string', 'max' => 255],
            [['Indicator'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Indicator' => 'Indicator',
            'Russia' => 'Russia',
            'Ukraine' => 'Ukraine',
        ];
    }
}
