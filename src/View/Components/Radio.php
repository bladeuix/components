<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Radio extends Component
{
    public function __construct(
        public string $name,
        public ?string $size = null,
        public ?string $color = null,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <input {{ $attributes->except(['type', 'id', 'name'])->class($classes())->merge(['type' => 'radio', 'name' => $name, 'id' => $name]) }}>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'radio',
            $this->sizeClass(),
            $this->colorClass(),
        ]);
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'radio-neutral',
            'primary'   => 'radio-primary',
            'secondary' => 'radio-secondary',
            'accent'    => 'radio-accent',
            'info'      => 'radio-info',
            'success'   => 'radio-success',
            'warning'   => 'radio-warning',
            'error'     => 'radio-error',
            default     => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'radio-xs',
            'sm'    => 'radio-sm',
            'md'    => 'radio-md',
            'lg'    => 'radio-lg',
            'xl'    => 'radio-xl',
            default => null,
        };
    }
}
