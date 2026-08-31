<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Closure;
use Illuminate\View\Component;

class Accordion extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $title = null,
        public ?string $icon = null,
        public ?bool $open = null,
        public bool $border = true
    ) {
    }

    public function render(): Closure
    {
        return function (array $data): string {
            return <<<'blade'
                <details {{ $attributes->class($classes())->merge($detailsAttributes()) }}>
                    <summary class="collapse-title">{{ $title }}</summary>
                    <div class="collapse-content">{{ $slot }}</div>
                </details>
            blade;
        };
    }

    public function classes(): array
    {
        return array_filter([
            'collapse',
            ...$this->borderClasses(),
            $this->iconClass(),
            $this->openClass(),
        ]);
    }

    public function detailsAttributes(): array
    {
        return array_filter([
            'name' => $this->name,
            'open' => $this->open === true ? true : null,
        ], fn ($value) => $value !== null && $value !== false);
    }

    private function borderClasses(): array
    {
        if (! $this->border) {
            return [];
        }

        return [
            'border',
            'border-base-300',
            'bg-base-100',
        ];
    }

    private function iconClass(): ?string
    {
        return match ($this->icon) {
            'arrow' => 'collapse-arrow',
            'plus'  => 'collapse-plus',
            default => null,
        };
    }

    private function openClass(): ?string
    {
        return match ($this->open) {
            true    => 'collapse-open',
            false   => 'collapse-close',
            default => null,
        };
    }

}
