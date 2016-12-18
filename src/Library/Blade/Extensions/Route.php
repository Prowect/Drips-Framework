<?php

namespace Prowect\Drips\Library\Blade\Extensions;

use Illuminate\Support\Facades\Blade;
use Prowect\Drips\Library\Blade\IBladeExtension;

class Route implements IBladeExtension
{
	public static function run()
	{
		// @route(name, [params])
		Blade::directive('route', function ($expression) {
            return "<?php echo route($expression); ?>";
        });
	}
}