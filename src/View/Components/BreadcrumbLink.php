<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class BreadcrumbLink extends Component
{
    public function __construct(
        public ?string $href = null
    ) {
    }

    public function render(): string
    {
        if ($this->href) {
            return <<<'blade'
                <li><a href="{{ $href }}" {{ $attributes->class($classes())->merge() }}>{{ $slot }}</a></li>
            blade;
        }

        return <<<'blade'
            <li><span aria-current="page">{{ $slot }}</span></li>
        blade;
    }

    public function classes(): array
    {
        return [];
    }
}
