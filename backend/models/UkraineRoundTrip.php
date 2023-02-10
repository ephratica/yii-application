<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ukraine_round_trip".
 *
 * @property string $type
 * @property int|null $num
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
            [['type'], 'required'],
            [['num'], 'integer'],
            [['type'], 'string', 'max' => 20],
            [['type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type' => 'Type',
            'num' => 'Num',
        ];
    }
}
