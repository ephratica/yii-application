<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the view of uploading files in backend.
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-4">文件上传界面📤</h1>
        </div>
        <div>
            <p class="fs-5 fw-light">操作步骤：“选择文件”→“Submit”</p>
            <p class="fs-5 fw-light">支持上传csv、xls、xlsx、zip、rar格式的文件。</p>
            <p class="fs-5 fw-light">注意：默认文件大小不得超过2MB，可在php.ini文件中进行个人设置。</p>
        </div>
    </div>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'dataFiles[]')->fileInput(['multiple' => true, 'accept' => 'MIME_type']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end() ?>