<?php
/**
*  Team: Untitled, NKU
*  Coding by ephratica 2012885
*  This is the model for wordmap.
*/

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Country extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%all_countries}}';
    }
}
