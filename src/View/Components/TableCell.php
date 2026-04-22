<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class TableCell extends Component
{
    public function __construct(
        public ?string $value = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <td {{ $attributes }}>{{ $value ?? $slot }}</td>
        blade;
    }
}
