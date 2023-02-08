<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanction_date".
 *
 * @property string $date
 * @property int $value
 */
class SanctionDate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sanction_date';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'value'], 'required'],
            [['date'], 'safe'],
            [['value'], 'integer'],
            [['date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'value' => 'Value',
        ];
    }
}
