# Aura

Aura is a border light effect that can wrap around any component. It is useful for highlighting an important button, card, or other element.

```html
<x-daisyui::aura>
    <x-daisyui::button>Button with aura</x-daisyui::button>
</x-daisyui::aura>
```

<div class="component-preview">
    <x-daisyui::aura>
        <x-daisyui::button>Button with aura</x-daisyui::button>
    </x-daisyui::aura>
</div>

## Aura around a card

```html
<x-daisyui::aura>
    <div class="card bg-base-100">
        <div class="card-body">
            <p>This card has aura</p>
        </div>
    </div>
</x-daisyui::aura>
```

<div class="component-preview">
    <x-daisyui::aura>
        <div class="card bg-base-100">
            <div class="card-body">
                <p>This card has aura</p>
            </div>
        </div>
    </x-daisyui::aura>
</div>

## Aura styles

```html
<x-daisyui::aura style="dual">
    <x-daisyui::button>Dual</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura style="rainbow">
    <x-daisyui::button>Rainbow</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura style="holo">
    <x-daisyui::button>Holo</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura style="glow">
    <x-daisyui::button>Glow</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura style="gold">
    <x-daisyui::button>Gold</x-daisyui::button>
</x-daisyui::aura>
```

```html
<x-daisyui::aura style="silver">
    <x-daisyui::button>Silver</x-daisyui::button>
</x-daisyui::aura>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-daisyui::aura style="dual">
        <x-daisyui::button>Dual</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura style="rainbow">
        <x-daisyui::button>Rainbow</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura style="holo">
        <x-daisyui::button>Holo</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura style="glow">
        <x-daisyui::button>Glow</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura style="gold">
        <x-daisyui::button>Gold</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura style="silver">
        <x-daisyui::button>Silver</x-daisyui::button>
    </x-daisyui::aura>
</div>

## Custom colors

```html
<x-daisyui::aura class="text-orange-600">
    <x-daisyui::button>Custom color</x-daisyui::button>
</x-daisyui::aura>

<x-daisyui::aura class="bg-yellow-200 text-orange-600">
    <x-daisyui::button>Custom color and background</x-daisyui::button>
</x-daisyui::aura>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-daisyui::aura class="text-orange-600">
        <x-daisyui::button>Custom color</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura class="bg-yellow-200 text-orange-600">
        <x-daisyui::button>Custom background</x-daisyui::button>
    </x-daisyui::aura>
</div>

## Aura around a pricing card

```html
<x-daisyui::aura style="rainbow">
    <div class="card w-96 bg-base-100 shadow-sm">
        <div class="card-body">
            <span class="badge badge-xs badge-warning">Most Popular</span>
            <div class="flex justify-between">
                <h2 class="text-3xl font-bold">Premium</h2>
                <span class="text-xl">$29/mo</span>
            </div>
            <ul class="mt-6 flex flex-col gap-2 text-xs">
                <li>High-resolution image generation</li>
                <li>Customizable style templates</li>
                <li>Batch processing capabilities</li>
                <li class="opacity-50 line-through">Real-time collaboration tools</li>
            </ul>
            <x-daisyui::button color="primary" class="mt-6 w-full">Subscribe</x-daisyui::button>
        </div>
    </div>
</x-daisyui::aura>
```

<div class="component-preview">
    <x-daisyui::aura style="rainbow">
        <div class="card w-96 bg-base-100 shadow-sm">
            <div class="card-body">
                <span class="badge badge-xs badge-warning">Most Popular</span>
                <div class="flex justify-between">
                    <h2 class="text-3xl font-bold">Premium</h2>
                    <span class="text-xl">$29/mo</span>
                </div>
                <ul class="mt-6 flex flex-col gap-2 text-xs">
                    <li>High-resolution image generation</li>
                    <li>Customizable style templates</li>
                    <li>Batch processing capabilities</li>
                    <li class="opacity-50 line-through">Real-time collaboration tools</li>
                </ul>
                <x-daisyui::button color="primary" class="mt-6 w-full">Subscribe</x-daisyui::button>
            </div>
        </div>
    </x-daisyui::aura>
</div>

## Aura sizes

```html
<x-daisyui::aura size="xs">
    <x-daisyui::button>XS</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura size="sm">
    <x-daisyui::button>SM</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura size="md">
    <x-daisyui::button>MD</x-daisyui::button>
</x-daisyui::aura>
<x-daisyui::aura size="lg">
    <x-daisyui::button>LG</x-daisyui::button>
</x-daisyui::aura>
```

```html
<x-daisyui::aura size="xl">
    <x-daisyui::button>XL</x-daisyui::button>
</x-daisyui::aura>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-daisyui::aura size="xs">
        <x-daisyui::button>XS</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura size="sm">
        <x-daisyui::button>SM</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura size="md">
        <x-daisyui::button>MD</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura size="lg">
        <x-daisyui::button>LG</x-daisyui::button>
    </x-daisyui::aura>
    <x-daisyui::aura size="xl">
        <x-daisyui::button>XL</x-daisyui::button>
    </x-daisyui::aura>
</div>

## Custom animation duration

```html
<x-daisyui::aura style="rainbow" class="duration-2000">
    <x-daisyui::button>2000ms duration aura</x-daisyui::button>
</x-daisyui::aura>
```

<div class="component-preview">
    <x-daisyui::aura style="rainbow" class="duration-2000">
        <x-daisyui::button>2000ms duration aura</x-daisyui::button>
    </x-daisyui::aura>
</div>