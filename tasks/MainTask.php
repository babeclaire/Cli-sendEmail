<?php

use Phalcon\Cli\Task;
use Phalcon\Ext\Mailer\Manager;

class MainTask extends Task {
	public function mainAction() {
		echo "I will get printed too!" . PHP_EOL;
	}

	public function sendEmailAction() {

		$config = [
			'driver' => 'smtp',
			'host' => 'smtp.live.com',
			'port' => 587,
			'encryption' => 'tls',
			'username' => 'frjrjej@hotmail.com',
			'password' => 'fff',
			'from' => [
				'email' => 'frjrjej@hotmail.com',
				'name' => 'sdfcf',
			],
		];
		$mailer = new Manager($config);

		$message = $mailer->createMessage()
			->to('babehoneyclaire@gmail.com', 'rfrege')
			->subject('Reminder!')
			->content('As you can see in the table of the link above, background-image, does not work in the most used mail clients currently: hotmail');
		// Set the Cc addresses of this message.
		$message->cc('fffw@gmail.com');
		// Set the Bcc addresses of this message.
		$message->bcc('frjrjej@hotmail.com');
		// Send message
		$message->send();
	}
}
