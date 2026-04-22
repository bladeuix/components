<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class TableHeadCell extends Component
{
    public function __construct(
        public ?string $value = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <th {{ $attributes }}>{{ $value ?? $slot }}</th>
        blade;
    }
}
