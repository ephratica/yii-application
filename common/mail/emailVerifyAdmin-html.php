<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Admin $admin */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $admin->verification_token]);
?>
<div class="verify-email">
    <p>Hello <?= Html::encode($admin->adminname) ?>,</p>

    <p>Follow the link below to verify your email:</p>

    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
</div>
