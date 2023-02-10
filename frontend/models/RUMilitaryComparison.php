<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "r_u_military_comparison".
 *
 * @property string $indicator
 * @property int|null $russia
 * @property int|null $ukraine
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
            [['indicator'], 'required'],
            [['russia', 'Ukraine'], 'integer'],
            [['indicator'], 'string', 'max' => 30],
            [['indicator'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indicator' => 'Indicator',
            'russia' => 'Russia',
            'ukraine' => 'Ukraine',
        ];
    }
}
