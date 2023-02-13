
<?php
/**
* Team: Untitled, NKU
* Coding by TephrocactusHC 2012026
* This is the model class for table "comment".
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $comment_id
 * @property string $comment
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
            [['comment'], 'required'],
            [['comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'comment' => 'Comment',
        ];
    }
}
