<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the model class of uploading form, supporting csv, xls, xlsx, zip, rar files.
*/

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $dataFiles;

    public function rules()
    {
        return [
            [['dataFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv, xls, xlsx, zip, rar', 'maxFiles' => 10],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->dataFiles as $file) {
                $file->saveAs('../../uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}