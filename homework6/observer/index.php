<?php

spl_autoload_register(function ($class){
    include $class.'.php';
});

$observer1 = new VacancyObserver('Джон', '42342' , 5);
$observer2 = new VacancyObserver('Иван', '42342342' , 2);
$observer3 = new VacancyObserver('Мария', '42342342' , 3);

$labourExchange = new LabourExchange();
$labourExchange->attach($observer2);
$labourExchange->attach($observer1);
$labourExchange->attach($observer3);
$labourExchange->detach($observer2);

$labourExchange->newVacancies();


