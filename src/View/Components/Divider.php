<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Divider extends Component
{
    public function __construct(
        public ?string $color = null,
        public ?string $direction = null,
        public ?string $placement = null
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
            'divider',
            $this->colorClass(),
            $this->directionClass(),
            $this->placementClass(),
        ]);
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'divider-neutral',
            'primary'   => 'divider-primary',
            'secondary' => 'divider-secondary',
            'accent'    => 'divider-accent',
            'info'      => 'divider-info',
            'success'   => 'divider-success',
            'warning'   => 'divider-warning',
            'error'     => 'divider-error',
            default     => null,
        };
    }

    private function directionClass(): ?string
    {
        return match ($this->direction) {
            'horizontal' => 'divider-horizontal',
            'vertical'   => 'divider-vertical',
            default      => null,
        };
    }

    private function placementClass(): ?string
    {
        return match ($this->placement) {
            'start' => 'divider-start',
            'end'   => 'divider-end',
            default => null,
        };
    }
}
