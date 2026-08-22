<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public ?string $size = null,
        public ?string $color = null,
        public ?string $variant = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <span {{ $attributes->class($classes())->merge() }}>{{ $slot }}</span>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'badge',
            $this->sizeClass(),
            $this->colorClass(),
            $this->variantClass(),
        ]);
    }

    private function variantClass(): ?string
    {
        return match ($this->variant) {
            'outline' => 'badge-outline',
            'dash'    => 'badge-dash',
            'soft'    => 'badge-soft',
            'ghost'   => 'badge-ghost',
            default   => null,
        };
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'badge-neutral',
            'primary'   => 'badge-primary',
            'secondary' => 'badge-secondary',
            'accent'    => 'badge-accent',
            'info'      => 'badge-info',
            'success'   => 'badge-success',
            'warning'   => 'badge-warning',
            'error'     => 'badge-error',
            default     => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'badge-xs',
            'sm'    => 'badge-sm',
            'md'    => 'badge-md',
            'lg'    => 'badge-lg',
            'xl'    => 'badge-xl',
            default => null,
        };
    }
}
