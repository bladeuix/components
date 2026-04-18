<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\ComponentSlot;

class Accordion extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $title = null,
        public ?string $icon = null,
        public ?string $state = null,
        public bool $open = false
    ) {
    }

    public function render(): Closure
    {
        return function (array $data): string {
            $title = $this->titleContent($data);

            return <<<blade
                <details {{ \$attributes->class(\$classes())->merge(\$detailsAttributes()) }}>
                    <summary class="collapse-title">{$title}</summary>
                    <div class="collapse-content">{{ \$slot }}</div>
                </details>
            blade;
        };
    }

    public function classes(): array
    {
        return array_filter([
            'collapse',
            'bg-base-100',
            'border',
            'border-base-300',
            $this->iconClass(),
            $this->stateClass(),
        ]);
    }

    public function detailsAttributes(): array
    {
        return array_filter([
            'name' => $this->name,
            'open' => $this->open ?: null,
        ], fn ($value) => $value !== null && $value !== false);
    }

    public function titleContent(array $data): string
    {
        $titleSlot = $data['title'] ?? null;

        if ($titleSlot instanceof ComponentSlot) {
            return $titleSlot->toHtml();
        }

        return e($this->title ?? '');
    }

    private function iconClass(): ?string
    {
        return match ($this->icon) {
            'arrow' => 'collapse-arrow',
            'plus'  => 'collapse-plus',
            default => null,
        };
    }

    private function stateClass(): ?string
    {
        return match ($this->state) {
            'open'  => 'collapse-open',
            'close' => 'collapse-close',
            default => null,
        };
    }
}
