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
    )
    {
    }

    public function render(): string
    {
        return <<<'blade'
            <div class="{{ $classes() }}">@if ($abbreviation)<div {{ $attributes->merge(['class' => $rounded ? 'rounded-full' : null]) }}><span>{{ $abbreviation }}</span></div>@else<img {{ $attributes->merge(['src' => $src, 'alt' => $alt, 'class' => $rounded ? 'rounded-full' : null]) }}>@endif</div>
        blade;
    }

    public function classes(): string
    {
        return implode(
            separator: ' ',
            array: array_filter([
                'avatar',
                $this->presenceClass(),
                $this->abbreviation ? 'avatar-placeholder' : null,
            ])
        );
    }

    private function presenceClass(): ?string
    {
        return match ($this->presence) {
            'online' => 'avatar-online',
            'offline' => 'avatar-offline',
            default => null,
        };
    }
}
