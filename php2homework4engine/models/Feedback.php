<?php

namespace app\models;

class Feedback extends DbModel
{
    public $id;
    public $name;
    public $message;
    public $time;

    public function __construct($name = null, $message = null, $time = null)
    {
        $this->name = $name;
        $this->message = $message;
        $this->time = $time;
    }


    public static function getTableName() {
        return 'feedback';
    }


}