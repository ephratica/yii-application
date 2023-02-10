<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ukraine_russia_military_expenditure".
 *
 * @property int $year
 * @property float|null $ukraine
 * @property float|null $russia
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
            [['year'], 'required'],
            [['year'], 'integer'],
            [['ukraine', 'russia'], 'number'],
            [['year'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'year' => 'Year',
            'ukraine' => 'Ukraine',
            'russia' => 'Russia',
        ];
    }
}
