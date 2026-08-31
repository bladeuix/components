<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public ?string $color = null,
        public ?string $direction = null,
        public ?string $style = null,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div role="alert" {{ $attributes->class($classes())->merge() }}>{{ $slot }}</div>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'alert',
            $this->colorClass(),
            $this->directionClass(),
            $this->styleClass(),
        ]);
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'info'    => 'alert-info',
            'success' => 'alert-success',
            'warning' => 'alert-warning',
            'error'   => 'alert-error',
            default   => null,
        };
    }

    private function directionClass(): ?string
    {
        return match ($this->direction) {
            'vertical'   => 'alert-vertical',
            'horizontal' => 'alert-horizontal',
            default      => null,
        };
    }

    private function styleClass(): ?string
    {
        return match ($this->style) {
            'outline' => 'alert-outline',
            'dash'    => 'alert-dash',
            'soft'    => 'alert-soft',
            default   => null,
        };
    }
}
