<?php


class SlackDecorator implements INotificator
{
	protected $objText;

	public function __construct($objText)
	{
		$this->objText = $objText;
	}

	public function send()
	{
		echo 'Notification by Slack'.PHP_EOL;;
		$this->objText->send();
	}


}