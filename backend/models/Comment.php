<?php

/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "comment".
*/

namespace backend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $comment_id
 * @property string $discuss
 * @property string|null $comment_time
 * @property string|null $username
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
            [['discuss'], 'required'],
            [['discuss'], 'string'],
            [['comment_time'], 'safe'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'discuss' => 'Discuss',
            'comment_time' => 'Comment Time',
            'username' => 'Username',
        ];
    }
}
