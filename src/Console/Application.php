<?php

namespace Prowect\Drips\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Console\Events\ArtisanStarting;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Illuminate\Contracts\Console\Application as ApplicationContract;
use Illuminate\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public function __construct(Container $laravel, Dispatcher $events, $version)
    {
        SymfonyApplication::__construct('Drips Framework', $version);

        $this->laravel = $laravel;
        $this->setAutoExit(false);
        $this->setCatchExceptions(false);

        $events->fire(new ArtisanStarting($this));

        $this->bootstrap();
    }
}