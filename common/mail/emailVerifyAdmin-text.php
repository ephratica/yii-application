<?php

/** @var yii\web\View $this */
/** @var common\models\Admin $admin */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $admin->verification_token]);
?>
Hello <?= $admin->adminname ?>,

Follow the link below to verify your email:

<?= $verifyLink ?>
