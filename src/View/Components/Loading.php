<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Loading extends Component
{
    public function __construct(
        public ?string $type = 'spinner',
        public ?string $size = null,
        public ?string $color = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <span {{ $attributes->class($classes())->merge() }}></span>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'loading',
            $this->typeClass(),
            $this->sizeClass(),
            $this->colorClass(),
        ]);
    }

    private function typeClass(): ?string
    {
        return match ($this->type) {
            'spinner'  => 'loading-spinner',
            'dots'     => 'loading-dots',
            'ring'     => 'loading-ring',
            'ball'     => 'loading-ball',
            'bars'     => 'loading-bars',
            'infinity' => 'loading-infinity',
            default    => 'loading-spinner',
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'loading-xs',
            'sm'    => 'loading-sm',
            'md'    => 'loading-md',
            'lg'    => 'loading-lg',
            'xl'    => 'loading-xl',
            default => null,
        };
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'primary'   => 'text-primary',
            'secondary' => 'text-secondary',
            'accent'    => 'text-accent',
            'neutral'   => 'text-neutral',
            'info'      => 'text-info',
            'success'   => 'text-success',
            'warning'   => 'text-warning',
            'error'     => 'text-error',
            default     => null,
        };
    }
}
