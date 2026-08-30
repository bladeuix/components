<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Kbd extends Component
{
    public function __construct(
        public ?string $size = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <kbd {{ $attributes->class($classes())->merge() }}>{{ $slot }}</kbd>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'kbd',
            $this->sizeClass(),
        ]);
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'kbd-xs',
            'sm'    => 'kbd-sm',
            'md'    => 'kbd-md',
            'lg'    => 'kbd-lg',
            'xl'    => 'kbd-xl',
            default => null,
        };
    }
}
