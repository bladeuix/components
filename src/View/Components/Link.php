<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public ?string $color = null,
        public bool $hover = false
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <a {{ $attributes->class($classes())->merge() }}>{{ $slot }}</a>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'link',
            $this->colorClass(),
            $this->hover ? 'link-hover' : null
        ]);
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'link-neutral',
            'primary'   => 'link-primary',
            'secondary' => 'link-secondary',
            'accent'    => 'link-accent',
            'info'      => 'link-info',
            'success'   => 'link-success',
            'warning'   => 'link-warning',
            'error'     => 'link-error',
            default     => null,
        };
    }
}
