<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class CarouselItem extends Component
{
    public function __construct(
        public ?string $imageSrc = null,
        public ?string $imageAlt = null,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class('carousel-item')->merge() }}>@if ($imageSrc)<img src="{{ $imageSrc }}" alt="{{ $imageAlt }}" />@endif{{ $slot }}</div>
        blade;
    }
}
