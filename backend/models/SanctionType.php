<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanction_type".
 *
 * @property string $type
 * @property int $value
 */
class SanctionType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sanction_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'value'], 'required'],
            [['value'], 'integer'],
            [['type'], 'string', 'max' => 255],
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
            'value' => 'Value',
        ];
    }
}
