<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the model class for table "aid".
*/

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aid".
 *
 * @property string $id
 * @property string $country
 * @property string|null $date
 * @property string $type
 * @property int|null $value
 *
 * @property AllCountries $country0
 */
class Aid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country', 'type'], 'required'],
            [['date'], 'safe'],
            [['value'], 'integer'],
            [['id'], 'string', 'max' => 5],
            [['country'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 20],
            [['id'], 'unique'],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => AllCountries::class, 'targetAttribute' => ['country' => 'country']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'date' => 'Date',
            'type' => 'Type',
            'value' => 'Value',
        ];
    }

    /**
     * Gets query for [[Country0]].
     *
     * @return \yii\db\ActiveQuery|AllCountriesQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(AllCountries::class, ['country' => 'country']);
    }
}
