<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "comment".
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $comment_id
 * @property string $username
 * @property string $discuss
 * @property string $comment_time
 */
class Comment extends \yii\db\ActiveRecord
{
    public $discuss;

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
            [['username', 'discuss', 'comment_time'], 'required'],
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
            'username' => 'Username',
            'discuss' => 'Discuss',
            'comment_time' => 'Comment Time',
        ];
    }

    public function getContent()
    {
        return $this->discuss;
    }

}
