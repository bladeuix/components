<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class RadialProgress extends Component
{
    public function __construct(
        public int $value = 0,
        public int $size = 80,
        public int $thickness = 8
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class($classes())->merge($radialAttributes()) }}>{{ $slot }}</div>
        blade;
    }

    public function classes(): array
    {
        return [
            'radial-progress',
        ];
    }

    public function radialAttributes(): array
    {
        return [
            'role'          => 'progressbar',
            'aria-valuenow' => $this->value,
            'style'         => "--value: {$this->value}; --size: {$this->size}px; --thickness: {$this->thickness}px;",
        ];
    }
}
