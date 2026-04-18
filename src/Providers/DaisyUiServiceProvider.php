<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DaisyUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::componentNamespace(
            namespace: 'BladeUix\\DaisyUi\\View\\Components',
            prefix: 'daisyui'
        );
    }
}
