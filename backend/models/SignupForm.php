<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\Admin;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $adminname;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['adminname', 'trim'],
            ['adminname', 'required'],
            ['adminname', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This adminname has already been taken.'],
            ['adminname', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

    /**
     * Signs admin up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $admin = new Admin();
        $admin->adminname = $this->adminname;
        $admin->email = $this->email;
        $admin->setPassword($this->password);
        $admin->generateAuthKey();
        $admin->generateEmailVerificationToken();

        return $admin->save() && $this->sendEmail($admin);
    }

    /**
     * Sends confirmation email to admin
     * @param Admin $admin admin model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($admin)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerifyAdmin-html', 'text' => 'emailVerifyAdmin-text'],
                ['admin' => $admin]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
