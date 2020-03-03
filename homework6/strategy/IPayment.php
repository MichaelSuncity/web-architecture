<?php


interface IPayment
{
    public function payment($total, $phone);
}