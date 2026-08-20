<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public function __construct(
        public ?string $presence = null,
        public ?string $abbreviation = null,
        public ?string $src = null,
        public ?string $alt = null,
        public bool    $rounded = false,
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class($classes())->merge() }}>@if ($hasAbbreviation())<div><span>{{ $abbreviation }}</span></div>@else<img src="{{ $src }}" alt="{{ $alt }}">@endif</div>
        blade;
    }

    public function classes(): string
    {
        return implode(
            separator: ' ',
            array: array_filter([
                'avatar',
                $this->presenceClass(),
                $this->hasAbbreviation() ? 'avatar-placeholder' : null,
                $this->rounded ? 'rounded-full' : null,
            ])
        );
    }

    public function hasAbbreviation(): bool
    {
        return $this->abbreviation !== null && $this->abbreviation !== '';
    }

    private function presenceClass(): ?string
    {
        return match ($this->presence) {
            'online'  => 'avatar-online',
            'offline' => 'avatar-offline',
            default   => null,
        };
    }
}
