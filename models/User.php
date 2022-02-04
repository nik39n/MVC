<?php
namespace app\models;
use app\core\DbModel;
class User extends DbModel
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function tableName():string{
        return 'user';
    }


    public function register(){
        echo "Creating a new user";
    }
    public function rules():array
    {
        return [
            'firstname' => [Model::RULE_REQUIRED],
            'lastname' => [Model::RULE_REQUIRED],
            'email' => [Model::RULE_REQUIRED, Model::RULE_EMAIL],
            'password' => [Model::RULE_REQUIRED, [Model::RULE_MIN, 'min' => 8],[Model::RULE_MAX,'max' => 24]],
            'confirmPassword' => [Model::RULE_REQUIRED, [Model::RULE_MATCH,'match' => 'password']]

        ];
    }


}