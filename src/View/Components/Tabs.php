<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public function __construct(
        public ?string $style = null,
        public ?string $placement = null,
        public ?string $size = null,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->except('role')->class($classes())->merge(['role' => 'tablist']) }}>{{ $slot }}</div>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'tabs',
            $this->styleClass(),
            $this->placementClass(),
            $this->sizeClass(),
        ]);
    }

    private function styleClass(): ?string
    {
        return match ($this->style) {
            'box'    => 'tabs-box',
            'border' => 'tabs-border',
            'lift'   => 'tabs-lift',
            default  => null,
        };
    }

    private function placementClass(): ?string
    {
        return match ($this->placement) {
            'top'    => 'tabs-top',
            'bottom' => 'tabs-bottom',
            default  => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'tabs-xs',
            'sm'    => 'tabs-sm',
            'md'    => 'tabs-md',
            'lg'    => 'tabs-lg',
            'xl'    => 'tabs-xl',
            default => null,
        };
    }
}
