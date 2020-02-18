<?php

namespace app\models;

class Order extends DbModel
{
    public $id;
    public $session_id;
    public $clientName;
    public $phone;

    public function __construct($session_id = null, $clientName = null, $phone = null)
    {
        $this->session_id = $session_id;
        $this->clientName = $clientName;
        $this->phone = $phone;
    }


    public function getTableName()
    {
        return 'orders';
    }

}