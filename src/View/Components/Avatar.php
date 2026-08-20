<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public function __construct(
        public bool $group = false,
        public ?string $status = null,
        public bool $placeholder = false,
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
            $this->group ? 'avatar-group' : 'avatar',
            $this->statusClass(),
            $this->placeholder ? 'avatar-placeholder' : null,
        ]);
    }

    private function statusClass(): ?string
    {
        return match ($this->status) {
            'online'  => 'avatar-online',
            'offline' => 'avatar-offline',
            default   => null,
        };
    }
}
