<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Support\Htmlable;

class Tab extends Component
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $href = null,
        public bool $active = false,
        public bool $disabled = false,
        public ?Htmlable $icon = null,
    ) {
    }

    public function render(): string
    {
        if ($this->href !== null) {
            return <<<'blade'
                <a {{ $attributes->except(['aria-disabled', 'class', 'href', 'role'])->class($classes())->merge($linkAttributes()) }}>{{ $icon }}{{ $label }}</a>
                <div {{ $attributes->only('class')->class('tab-content') }}>{{ $slot }}</div>
            blade;
        }

        return <<<'blade'
            <label {{ $attributes->except(['aria-label', 'autocomplete', 'class', 'href', 'name', 'type'])->class($classes()) }}>
            <input {{ $attributes->except(['aria-label', 'autocomplete', 'class', 'href', 'name', 'type'])->merge($radioAttributes()) }} />{{ $icon }}{{ $label }}</label>
            <div {{ $attributes->only('class')->class('tab-content') }}>{{ $slot }}</div>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'tab',
            $this->href !== null && $this->active ? 'tab-active' : null,
            $this->disabled ? 'tab-disabled' : null,
        ]);
    }

    public function radioAttributes(): array
    {
        return array_filter([
            'type'         => 'radio',
            'name'         => $this->name,
            'autocomplete' => 'off',
            'checked'      => $this->active ?: null,
            'disabled'     => $this->disabled ?: null,
        ]);
    }

    public function linkAttributes(): array
    {
        return $this->disabled
            ? ['role' => 'tab', 'aria-disabled' => 'true']
            : ['href' => $this->href, 'role' => 'tab'];
    }
}
