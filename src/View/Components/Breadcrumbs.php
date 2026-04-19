<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class($classes())->merge() }}>
                <ul>{{ $slot }}</ul>
            </div>
        blade;
    }

    public function classes(): array
    {
        return ['breadcrumbs'];
    }
}
