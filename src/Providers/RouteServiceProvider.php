<?php

namespace Prowect\Drips\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
	protected $namespace = 'App\Http\Controllers';

	public function map()
	{
		$routesDirectory = DRIPS_DIRECTORY . DIRECTORY_SEPARATOR . 'routes';
		foreach(glob($routesDirectory . DIRECTORY_SEPARATOR . '*.php') as $routeFile){
			Route::group(['namespace' => $this->namespace], function($router) use ($routeFile) {
				require_once $routeFile;
			});
		}
	}
}