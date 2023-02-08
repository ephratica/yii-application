<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "all_countries".
 *
 * @property string $country
 * @property float|null $gdp
 * @property int $sanction
 * @property int $aid
 * @property float|null $total_cost_in_billion_euros
 * @property int|null $number_of_refugees
 * @property string $code
 *
 * @property Aid[] $as
 * @property SanctionCountry $sanctionCountry
 */
class AllCountries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'all_countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'sanction', 'aid', 'code'], 'required'],
            [['gdp', 'total_cost_in_billion_euros'], 'number'],
            [['sanction', 'aid', 'number_of_refugees'], 'integer'],
            [['country'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 5],
            [['country'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'gdp' => 'Gdp',
            'sanction' => 'Sanction',
            'aid' => 'Aid',
            'total_cost_in_billion_euros' => 'Total Cost In Billion Euros',
            'number_of_refugees' => 'Number Of Refugees',
            'code' => 'Code',
        ];
    }

    /**
     * Gets query for [[As]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAs()
    {
        return $this->hasMany(Aid::class, ['country' => 'country']);
    }

    /**
     * Gets query for [[SanctionCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSanctionCountry()
    {
        return $this->hasOne(SanctionCountry::class, ['country' => 'country']);
    }
}
