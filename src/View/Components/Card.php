<?php

declare(strict_types=1);

namespace BladeUix\View\Components;

use Closure;
use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public ?string $size = null,
        public ?string $title = null,
        public ?string $imageSrc = null,
        public ?string $imageAlt = null,
        public bool $imageBottom = false,
        public bool $imageFull = false,
        public bool $side = false,
    ) {
    }

    public function render(): Closure
    {
        return function (array $data): string {
            $style = $data['attributes']->get('style');
            $classes = var_export($this->classes($style), true);

            return <<<blade
                <div {{ \$attributes->except('style', 'title', 'image-src', 'image-alt', 'image-bottom')->class($classes)->merge() }}>
                    @if (\$imageSrc && ! \$imageBottom)<figure><img src="{{ \$imageSrc }}" alt="{{ \$imageAlt }}"></figure>@endif
                    <div class="card-body">
                        @if (\$title)<h2 class="card-title">{{ \$title }}</h2>@endif
                        {{ \$slot }}
                        @isset(\$actions)<div class="card-actions">{{ \$actions }}</div>@endisset
                    </div>
                    @if (\$imageSrc && \$imageBottom)<figure><img src="{{ \$imageSrc }}" alt="{{ \$imageAlt }}"></figure>@endif
                </div>
            blade;
        };
    }

    public function classes(?string $style = null): array
    {
        return array_filter([
            'card',
            $this->sizeClass(),
            $this->styleClass($style),
            $this->imageFull ? 'image-full' : null,
            $this->side ? 'card-side' : null,
        ]);
    }

    private function sizeClass(): ?string
    {
        return match ($this->size) {
            'xs'    => 'card-xs',
            'sm'    => 'card-sm',
            'md'    => 'card-md',
            'lg'    => 'card-lg',
            'xl'    => 'card-xl',
            default => null,
        };
    }

    private function styleClass(?string $style): ?string
    {
        return match ($style) {
            'border', 'card-border' => 'card-border',
            'dash', 'card-dash' => 'card-dash',
            default => null,
        };
    }
}
