<?php


class WebmoneyPayment implements IPayment
{
    public function payment($total, $phone)
    {
        echo "Уважаемый клиент {$phone}. Сумма к оплате {$total}. Перевод денег осуществится через платежную систему WebMoney".PHP_EOL;
    }
}