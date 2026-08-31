<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Swap extends Component
{
    public function __construct(
        public bool $active = false,
        public bool $rotate = false,
        public bool $flip = false,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <label {{ $attributes->class($classes())->merge() }}>
                {{ $off }}
                {{ $on }}
                {{ $indeterminate ?? '' }}
            </label>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'swap',
            $this->active ? 'swap-active' : null,
            $this->rotate ? 'swap-rotate' : null,
            $this->flip ? 'swap-flip' : null,
        ]);
    }
}
