<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class IndicatorItem extends Component
{
    public function __construct(
        public ?string $horizontal = null,
        public ?string $vertical = null,
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
            'indicator-item',
            $this->horizontalClass(),
            $this->verticalClass(),
        ]);
    }

    private function horizontalClass(): ?string
    {
        return match ($this->horizontal) {
            'start'  => 'indicator-start',
            'center' => 'indicator-center',
            'end'    => 'indicator-end',
            default  => null,
        };
    }

    private function verticalClass(): ?string
    {
        return match ($this->vertical) {
            'top'    => 'indicator-top',
            'middle' => 'indicator-middle',
            'bottom' => 'indicator-bottom',
            default  => null,
        };
    }
}
