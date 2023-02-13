<?php

namespace backend\models;

use Yii;
use common\models\Admin;
use yii\base\Model;

class ResendVerificationEmailForm extends Model
{
    /**
     * @var string
     */
    public $email;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\Admin',
                'filter' => ['status' => Admin::STATUS_INACTIVE],
                'message' => 'There is no admin with this email address.'
            ],
        ];
    }

    /**
     * Sends confirmation email to admin
     *
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
        $admin = Admin::findOne([
            'email' => $this->email,
            'status' => Admin::STATUS_INACTIVE
        ]);

        if ($admin === null) {
            return false;
        }

        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['admin' => $admin]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
