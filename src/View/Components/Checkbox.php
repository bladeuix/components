<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public ?string $size = null,
        public ?string $color = null,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <input {{ $attributes->except('type')->class($classes())->merge(['type' => 'checkbox']) }}>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'checkbox',
            $this->sizeClass(),
            $this->colorClass(),
        ]);
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'checkbox-neutral',
            'primary'   => 'checkbox-primary',
            'secondary' => 'checkbox-secondary',
            'accent'    => 'checkbox-accent',
            'info'      => 'checkbox-info',
            'success'   => 'checkbox-success',
            'warning'   => 'checkbox-warning',
            'error'     => 'checkbox-error',
            default     => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'checkbox-xs',
            'sm'    => 'checkbox-sm',
            'md'    => 'checkbox-md',
            'lg'    => 'checkbox-lg',
            'xl'    => 'checkbox-xl',
            default => null,
        };
    }
}
