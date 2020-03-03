<?php

spl_autoload_register(function ($class){
    include $class.'.php';
});

function test($total, $phone){
    $collection = new SocksCollection();
    $collection->payment(new QiwiPayment(), $total, $phone);
    $collection->payment(new WebmoneyPayment(), $total, $phone);
    $collection->payment(new YandexPayment(), $total, $phone);
}

$socks = new Socks(50, 10);
$total = $socks->getTotal();

$phone = 999995;


test($total, $phone);