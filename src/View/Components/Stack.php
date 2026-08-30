<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Stack extends Component
{
    public function __construct(
        public ?string $direction = null,
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
            'stack',
            $this->directionClass(),
        ]);
    }

    private function directionClass(): ?string
    {
        return match ($this->direction) {
            'top'    => 'stack-top',
            'bottom' => 'stack-bottom',
            'start'  => 'stack-start',
            'end'    => 'stack-end',
            default  => null,
        };
    }
}
