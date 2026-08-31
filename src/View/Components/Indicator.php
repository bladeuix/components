<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Indicator extends Component
{
    public function __construct(
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class('indicator') }}>{{ $slot }}</div>
        blade;
    }
}
