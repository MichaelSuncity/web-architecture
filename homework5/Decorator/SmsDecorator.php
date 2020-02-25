<?php


class SmsDecorator implements INotificator
{
	protected $objText;

	public function __construct($objText)
	{
		$this->objText = $objText;
	}

	public function send()
	{
        echo 'Notification by SMS'.PHP_EOL;
		$this->objText->send();
	}


}