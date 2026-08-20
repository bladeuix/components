<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class AvatarGroup extends Component
{
    public function render(): string
    {
        return <<<'blade'
            <div {{ $attributes->class('avatar-group')->merge() }}>{{ $slot }}</div>
        blade;
    }
}
