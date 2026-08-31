<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Illuminate\View\Component;

class Diff extends Component
{
    public function render(): string
    {
        return <<<'blade'
            <figure {{ $attributes->class('diff') }}>
                @if (isset($item1) && $item1->isNotEmpty())
                    <div class="diff-item-1" role="img">{{ $item1 }}</div>
                @endif
                @if (isset($item2) && $item2->isNotEmpty())
                    <div class="diff-item-2" role="img">{{ $item2 }}</div>
                @endif
                @if (isset($resizer) && $resizer->isNotEmpty())
                    {{ $resizer }}
                @else
                    <div class="diff-resizer"></div>
                @endif
            </figure>
        blade;
    }
}
