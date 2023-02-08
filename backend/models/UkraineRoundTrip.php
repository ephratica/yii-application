<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ukraine_round_trip".
 *
 * @property string $Type
 * @property int|null $Num
 */
class UkraineRoundTrip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukraine_round_trip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type'], 'required'],
            [['Num'], 'integer'],
            [['Type'], 'string', 'max' => 255],
            [['Type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Type' => 'Type',
            'Num' => 'Num',
        ];
    }
}
