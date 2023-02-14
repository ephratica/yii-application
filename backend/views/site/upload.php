<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the view of uploading files in backend.
*/

use yii\widgets\ActiveForm;
?>

<div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-4">文件上传界面📤</h1>
            <p class="fs-5 fw-light">操作步骤：“选择文件”→“Submit”</p>
        </div>
    </div>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'dataFiles[]')->fileInput(['multiple' => true, 'accept' => 'MIME_type']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>