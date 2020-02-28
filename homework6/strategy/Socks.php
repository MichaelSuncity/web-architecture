<?php


class Socks
{
    protected $price;
    protected $quantity;
    protected $total;

    public function __construct($price, $quantity)
    {
        $this->price=$price;
        $this->quantity=$quantity;
    }

    public function getTotal()
    {
        return $this->total = $this->price*$this->quantity;
    }
}

