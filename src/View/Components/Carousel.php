<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Carousel extends Component
{
    public function __construct(
        public string $modifier = 'start',
        public string $direction = 'horizontal',
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class($classes())->merge() }}>{{ $slot }}</div>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'carousel',
            $this->modifierClass(),
            $this->directionClass(),
        ]);
    }

    private function modifierClass(): ?string
    {
        return match ($this->modifier) {
            'start'  => 'carousel-start',
            'center' => 'carousel-center',
            'end'    => 'carousel-end',
            default  => 'carousel-start',
        };
    }

    private function directionClass(): ?string
    {
        return match ($this->direction) {
            'horizontal' => 'carousel-horizontal',
            'vertical'   => 'carousel-vertical',
            default      => 'carousel-horizontal',
        };
    }
}
