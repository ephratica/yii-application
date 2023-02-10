<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanction_country".
 *
 * @property string $country
 * @property int $since_2014
 * @property int $since_202202
 *
 * @property AllCountries $country0
 */
class SanctionCountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sanction_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'since_2014', 'since_202202'], 'required'],
            [['since_2014', 'since_202202'], 'integer'],
            [['country'], 'string', 'max' => 50],
            [['country'], 'unique'],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => AllCountries::class, 'targetAttribute' => ['country' => 'country']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'since_2014' => 'Since 2014',
            'since_202202' => 'Since 202202',
        ];
    }

    /**
     * Gets query for [[Country0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(AllCountries::class, ['country' => 'country']);
    }
}
