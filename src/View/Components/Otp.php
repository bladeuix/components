<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Otp extends Component
{
    public function __construct(
        public string $id,
        public ?string $size = null,
        public ?string $color = null,
        public bool $joined = false,
        public int $length = 4,
        public string $type = 'text',
        public string $autocomplete = 'one-time-code',
        public string $inputmode = 'numeric',
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <label {{ $attributes->only('class')->class($classes())->merge() }}>
                @for ($i = 0; $i < $length; $i++)
                    <span></span>
                @endfor
                <input {{ $attributes->except('class')->merge(['type' => $type, 'autocomplete' => $autocomplete, 'inputmode' => $inputmode, 'id' => $id, 'name' => $id]) }}>
            </label>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'otp',
            $this->sizeClass(),
            $this->colorClass(),
            $this->joined ? 'otp-joined' : null,
        ]);
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'otp-xs',
            'sm'    => 'otp-sm',
            'md'    => 'otp-md',
            'lg'    => 'otp-lg',
            'xl'    => 'otp-xl',
            default => null,
        };
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'otp-neutral',
            'primary'   => 'otp-primary',
            'secondary' => 'otp-secondary',
            'accent'    => 'otp-accent',
            'info'      => 'otp-info',
            'success'   => 'otp-success',
            'warning'   => 'otp-warning',
            'error'     => 'otp-error',
            default     => null,
        };
    }
}
