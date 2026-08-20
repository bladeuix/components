<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Aura extends Component
{
    public function __construct(
        public ?string $style = null,
        public ?string $size = null,
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
            'aura',
            $this->styleClass(),
            $this->sizeClass(),
        ]);
    }

    private function styleClass(): ?string
    {
        return match ($this->style) {
            'dual'    => 'aura-dual',
            'rainbow' => 'aura-rainbow',
            'holo'    => 'aura-holo',
            'gold'    => 'aura-gold',
            'silver'  => 'aura-silver',
            'glow'    => 'aura-glow',
            default   => null,
        };
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'aura-xs',
            'sm'    => 'aura-sm',
            'md'    => 'aura-md',
            'lg'    => 'aura-lg',
            'xl'    => 'aura-xl',
            default => null,
        };
    }
}
