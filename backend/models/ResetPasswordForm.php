<?php

namespace backend\models;

use yii\base\InvalidArgumentException;
use yii\base\Model;
use Yii;
use common\models\Admin;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;

    /**
     * @var \common\models\Admin
     */
    private $_admin;


    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws InvalidArgumentException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Password reset token cannot be blank.');
        }
        $this->_admin = Admin::findByPasswordResetToken($token);
        if (!$this->_admin) {
            throw new InvalidArgumentException('Wrong password reset token.');
        }
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['admin.passwordMinLength']],
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $admin = $this->_admin;
        $admin->setPassword($this->password);
        $admin->removePasswordResetToken();
        $admin->generateAuthKey();

        return $admin->save(false);
    }
}
