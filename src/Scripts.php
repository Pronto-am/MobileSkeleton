<?php

namespace App;

use Composer\Composer;
use Composer\Script\Event;

class Scripts
{
	/**
	 * @param $event
	 * @throws \Exception
	 */
	public static function postCreateProject(Event $event): void
	{
		\Pronto\MobileBundle\Scripts::postCreateProject($event);
	}
}