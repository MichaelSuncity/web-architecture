<?php


class SocksCollection
{
    public function payment (IPayment $payment, $total, $phone){
        return $payment->payment($total, $phone);
    }
}