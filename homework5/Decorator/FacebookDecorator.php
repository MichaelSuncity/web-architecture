<?php


class FacebookDecorator implements INotificator
{
	protected $objText;

	public function __construct($objText)
	{
		$this->objText = $objText;
	}

	public function send()
	{
        echo 'Notification by Facebook'.PHP_EOL;;
		$this->objText->send();
	}


}