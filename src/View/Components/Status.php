<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Status extends Component
{
    public function __construct(
        public ?string $color = null,
        public ?string $size = null,
        public ?string $animation = null
    ) {
    }

    public function render(): string
    {
        if ($this->animation === 'ping') {
            return <<<'blade'
                <span {{ $attributes->class(['inline-grid *:[grid-area:1/1]'])->merge() }}>
                    <span class="{{ $statusClasses }} animate-ping"></span>
                    <span class="{{ $statusClasses }}"></span>
                </span>
            blade;
        }

        return <<<'blade'
            <span {{ $attributes->class($classes())->merge() }}></span>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'status',
            $this->colorClass(),
            $this->sizeClass(),
            $this->animationClass(),
        ]);
    }

    public function statusClasses(): string
    {
        return implode(' ', array_filter([
            'status',
            $this->colorClass(),
            $this->sizeClass(),
        ]));
    }

    private function animationClass(): ?string
    {
        return match ($this->animation) {
            'bounce' => 'animate-bounce',
            'ping'   => 'animate-ping',
            default  => null,
        };
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'status-neutral',
            'primary'   => 'status-primary',
            'secondary' => 'status-secondary',
            'accent'    => 'status-accent',
            'info'      => 'status-info',
            'success'   => 'status-success',
            'warning'   => 'status-warning',
            'error'     => 'status-error',
            default     => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'status-xs',
            'sm'    => 'status-sm',
            'md'    => 'status-md',
            'lg'    => 'status-lg',
            'xl'    => 'status-xl',
            default => null,
        };
    }
}
