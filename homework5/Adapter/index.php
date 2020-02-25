<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});


$square = (new SquareAdapter())->squareArea(5);
echo "Площадь квадрата составляет {$square}".PHP_EOL;

$squareCircle = (new CircleAdapter())->circleArea(10);
$squareCircle = round($squareCircle, 2);
echo "Площадь круга  составляет {$squareCircle}".PHP_EOL;
