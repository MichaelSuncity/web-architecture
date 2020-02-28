<?php


class YandexPayment implements IPayment
{
    public function payment($total, $phone)
    {
        echo "Уважаемый клиент {$phone}. Сумма к оплате {$total}. Перевод денег осуществится через платежную систему yandexmoney".PHP_EOL;
    }
}