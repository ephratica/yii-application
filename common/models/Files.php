<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the model class for table "files".
*/

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property string $name
 * @property int|null $download_times
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['download_times'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'download_times' => 'Download Times',
        ];
    }
}
