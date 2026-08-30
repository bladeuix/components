<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Skeleton extends Component
{
    public function __construct(
        public bool $text = false,
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
            'skeleton',
            $this->text ? 'skeleton-text' : null,
        ]);
    }
}
