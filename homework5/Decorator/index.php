<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$decorator = new FacebookDecorator((new SlackDecorator(new  SmsDecorator(new BaseDecorator()))));

$decorator2 = new SlackDecorator(new FacebookDecorator(new BaseDecorator()));
$decorator2 = new FacebookDecorator($decorator2);

$decorator->send();
$decorator2->send();