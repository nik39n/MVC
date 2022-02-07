<?php

namespace app\models;
use app\core\Model;
use app\core\Application;

class LoginForm extends Model
{
    public string $email = '';
    public string $password= '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Your email',
            'password' => 'Password'
        ];
    }


    public function login()
    {
        $foo = new User;
        $user = $foo->findOne(['email' => $this->email]);
        if (!$user){
            $this->addError('email','User does not exists with this email');
            return false;
        }
        if (!password_verify($this->password,$user->password)){
            $this->addError('password','password is incorect');
            return false;
        }
        return Application::$app->login($user);

    }
}