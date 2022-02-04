<?php

namespace app\models;

class LoginForm extends Model
{
    public string $email;
    public string $password;

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }


    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        Application::$app->login

    }
}