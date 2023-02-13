<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the view of uploading files in backend.
*/

use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'dataFiles[]')->fileInput(['multiple' => true, 'accept' => 'MIME_type']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>