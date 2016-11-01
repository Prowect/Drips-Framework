<?php

namespace Prowect\Drips\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function getArtisan()
    {
        if (is_null($this->artisan)) {
            return $this->artisan = (new Application($this->app, $this->events, $this->app->version()))->resolveCommands($this->commands);
        }

        return $this->artisan;
    }
}