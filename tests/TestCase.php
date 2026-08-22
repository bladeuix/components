<?php

declare(strict_types=1);

namespace BladeUix\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use BladeUix\Providers\BladeUixServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BladeUixServiceProvider::class,
        ];
    }
}
