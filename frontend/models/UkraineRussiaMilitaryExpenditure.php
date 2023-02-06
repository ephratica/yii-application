<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ukraine_russia_military_expenditure".
 *
 * @property int $Year
 * @property float|null $Ukraine
 * @property float|null $Russia
 */
class UkraineRussiaMilitaryExpenditure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukraine_russia_military_expenditure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Year'], 'required'],
            [['Year'], 'integer'],
            [['Ukraine', 'Russia'], 'number'],
            [['Year'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Year' => 'Year',
            'Ukraine' => 'Ukraine',
            'Russia' => 'Russia',
        ];
    }
}
