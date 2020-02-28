<?php

spl_autoload_register(function ($class){
    include $class.'.php';
});

$observer1 = new VacancyObserver('Джон', '42342' , 5);
$observer2 = new VacancyObserver('Иван', '42342342' , 2);
$observer3 = new VacancyObserver('Мария', '42342342' , 3);

$basicVacancies = [
    'первая',
    'вторая',
    'третья',
];

$newVacancies = [
    'первая',
    'вторая',
    'third',
    'test'
];

$labourExchange = new LabourExchange();
$labourExchange->attach($observer2);
$labourExchange->attach($observer1);
$labourExchange->setVacancies($basicVacancies);
$oldVacancies = $labourExchange->getVacancies();

$diff = array_diff_assoc($newVacancies, $oldVacancies);
if(!$diff){
    echo 'нет новых вакансий';
}else{
    $labourExchange->notify();
    foreach ($diff as $value ){
        echo "<b>{$value}</b> ";
    }
}



