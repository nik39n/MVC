<?php

namespace app\core;

abstract class DbModel extends Model
{
    abstract public function tableName():string;

    abstract public function attributes():array;

    public function save()
    {
        $tableName = $this->tableName();
        $attribute = $this->attributes();
        $statement = self::prepare("INSERT INTO $tableName (firstname,lastname) VALUES(:firstname, )");

    }

    public static function prepare($sql){
        return  Application::$app->db->pdo->prepare($sql);

    }

}