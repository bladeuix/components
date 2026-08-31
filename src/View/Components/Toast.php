<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Toast extends Component
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
            'toast',
            $this->horizontalClass(),
            $this->verticalClass(),
        ]);
    }

    private function horizontalClass(): ?string
    {
        return match ($this->horizontal) {
            'start'  => 'toast-start',
            'center' => 'toast-center',
            'end'    => 'toast-end',
            default  => null,
        };
    }

    private function verticalClass(): ?string
    {
        return match ($this->vertical) {
            'top'    => 'toast-top',
            'middle' => 'toast-middle',
            'bottom' => 'toast-bottom',
            default  => null,
        };
    }
}
