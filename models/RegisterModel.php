<?php
namespace app\models;

class RegisterModel extends \app\core\Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register(){
        echo "Creating a new user";
    }
    public function rules():array
    {
        return [

        ];
    }


}