<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public function __construct(
        public ?string $size = null,
        public bool $zebra = false,
        public bool $pinRows = false,
        public bool $pinCols = false
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <table {{ $attributes->class($classes())->merge() }}>
                @isset($thead)
                    <thead><tr>{{ $thead }}</tr></thead>
                @endisset

                <tbody>{{ $slot }}</tbody>

                @isset($tfoot)
                    <tfoot><tr>{{ $tfoot }}</tr></tfoot>
                @endisset
            </table>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'table',
            $this->sizeClass(),
            $this->zebra ? 'table-zebra' : null,
            $this->pinRows ? 'table-pin-rows' : null,
            $this->pinCols ? 'table-pin-cols' : null,
        ]);
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'table-xs',
            'sm'    => 'table-sm',
            'md'    => 'table-md',
            'lg'    => 'table-lg',
            'xl'    => 'table-xl',
            default => null,
        };
    }

}
