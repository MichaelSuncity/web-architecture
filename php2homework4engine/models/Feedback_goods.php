<?php


namespace app\models;


class Feedback_goods extends DbModel
{
    public $id;
    public $author;
    public $message;
    public $id_good;

    public function __construct($author = null, $message = null, $id_good = null)
    {
        $this->author = $author;
        $this->message = $message;
        $this->id_good = $id_good;
    }

    public function getTableName() {
        return 'feedback_goods';
    }
}