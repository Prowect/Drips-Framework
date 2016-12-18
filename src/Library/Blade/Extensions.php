<?php

namespace Prowect\Drips\Library\Blade;

use Prowect\Drips\Library\Blade\Extensions\Route;
use Prowect\Drips\Library\Blade\IBladeExtension;

class Extensions 
{
	protected static $extensions = [Route::class];

	public static function register($extension)
	{
		if(class_exists($extension) && in_array(IBladeExtension::class, class_implements($extension)) && !in_array($extension, static::$extensions)) {
			stsatic::$extensions[] = $extension;
		}

		return false;
	}

	public static function all()
	{
		return static::$extensions;
	}

	public static function run()
	{
		foreach(static::all() as $extension) {
			$extension::run();
		}
	}
}