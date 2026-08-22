<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class TableRow extends Component
{
    public function render(): string
    {
        return <<<'blade'
            <tr {{ $attributes }}>{{ $slot }}</tr>
        blade;
    }
}
