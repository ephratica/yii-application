<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ukraine_civilian_casualties".
 *
 * @property string $type
 * @property int|null $total
 * @property int|null $children
 */
class UkraineCivilianCasualties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukraine_civilian_casualties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['total', 'children'], 'integer'],
            [['type'], 'string', 'max' => 10],
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
            'total' => 'Total',
            'children' => 'Children',
        ];
    }
}
