<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $discuss
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'discuss'], 'required'],
            [['id'], 'integer'],
            [['discuss'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'discuss' => 'Discuss',
        ];
    }
}
