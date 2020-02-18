<?php
namespace app\models;

use app\engine\Db;

/**
 * Class Model
 * @package app\models
 */

abstract class DbModel extends Models
{
    public function getLimit($from, $to) {
        $params=[];
        $params[]=$from;
        $params[]=$to;
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT ?, ?";
        return Db::getInstance()->queryLimit($sql, $params);
    }

    public function getWhere($name, $value) {

    }

    public function insert() {
        $params = [];
        $columns = [];
        $tableName = static::getTableName();
        //TODO переделать цикл по state чтобы избавиться от условия
        foreach ($this as $key => $value) {
            if ($key === "id" or $key === "state") continue;
            $params[":{$key}"] = $value;
            $columns[] = "`$key`";
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));
        //INSERT INTO `products`(`id`, `name`, `description`, `price`) VALUES (:name, ,[value-4])
       
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ($values);";
                     
        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function update() {
        //TODO реализовать умный update (цикл по state)
        $set = [];
        $params = [];
        $tableName = static::getTableName();
        foreach ($this->state as $key => $value) {
            if ($key === "id" or $value == false) continue; //поиск полей, значения которых нужно поменять
                $set[] = "`$key`=:{$key}";
                foreach ($this as $key2 => $value2) {
                    if($key!=$key2) continue;
                    $params[":{$key2}"] = $value2;
                }
        }
        $set = implode(", ", $set);
        $params[':id'] = $this->id;
        //UPDATE `products` SET `name`=:name,`description`=[value-3],`price`=[value-4] WHERE id = :id
        $sql = "UPDATE {$tableName} SET {$set} WHERE id = :id";
        /*echo '<pre>';
        var_dump($sql, $params);
        echo '</pre>';
        die();*/
        return Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
     
    }

    public function save() {
        if (is_null($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }

    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }
    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

}