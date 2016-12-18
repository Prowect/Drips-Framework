<?php

namespace Prowect\Drips\Providers;

use Illuminate\Support\ServiceProvider;
use Prowect\Drips\Library\Blade\Extensions as BladeExtensions;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	BladeExtensions::run();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
