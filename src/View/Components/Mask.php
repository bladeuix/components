<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Mask extends Component
{
    public function __construct(
        public ?string $shape = null,
        public ?string $half = null,
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
            'mask',
            $this->shapeClass(),
            $this->halfClass(),
        ]);
    }

    private function shapeClass(): ?string
    {
        return match ($this->shape) {
            'squircle'   => 'mask-squircle',
            'heart'      => 'mask-heart',
            'hexagon'    => 'mask-hexagon',
            'hexagon-2'  => 'mask-hexagon-2',
            'decagon'    => 'mask-decagon',
            'pentagon'   => 'mask-pentagon',
            'diamond'    => 'mask-diamond',
            'square'     => 'mask-square',
            'circle'     => 'mask-circle',
            'star'       => 'mask-star',
            'star-2'     => 'mask-star-2',
            'triangle'   => 'mask-triangle',
            'triangle-2' => 'mask-triangle-2',
            'triangle-3' => 'mask-triangle-3',
            'triangle-4' => 'mask-triangle-4',
            default      => null,
        };
    }

    private function halfClass(): ?string
    {
        return match ($this->half) {
            '1'     => 'mask-half-1',
            '2'     => 'mask-half-2',
            default => null,
        };
    }
}
