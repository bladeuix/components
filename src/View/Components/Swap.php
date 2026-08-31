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
                <input type="checkbox" />
                <div {{ $off->attributes->class(['swap-off']) }}>{{ $off }}</div>
                <div {{ $on->attributes->class(['swap-on']) }}>{{ $on }}</div>
                @isset($indeterminate)
                    <div {{ $$indeterminate->attributes->class(['swap-indeterminate']) }}>{{ $indeterminate }}</div>
                @endisset
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
