# Aura

Aura is a border light effect that can wrap around any component. It is useful for highlighting an important button, card, or other element.

```preview-html
<x-aura>
    <x-button>Button with aura</x-button>
</x-aura>
```

## Aura around a card

```preview-html
<x-aura>
    <div class="card bg-base-100">
        <div class="card-body">
            <p>This card has aura</p>
        </div>
    </div>
</x-aura>
```

## Aura styles

```preview-html
<x-aura style="dual">
    <x-button>Dual</x-button>
</x-aura>
<x-aura style="rainbow">
    <x-button>Rainbow</x-button>
</x-aura>
<x-aura style="holo">
    <x-button>Holo</x-button>
</x-aura>
<x-aura style="glow">
    <x-button>Glow</x-button>
</x-aura>
<x-aura style="gold">
    <x-button>Gold</x-button>
</x-aura>
<x-aura style="silver">
    <x-button>Silver</x-button>
</x-aura>
```

## Custom colors

```preview-html
<x-aura class="text-orange-600">
    <x-button>Custom color</x-button>
</x-aura>
<x-aura class="bg-yellow-200 text-orange-600">
    <x-button>Custom background</x-button>
</x-aura>
```

## Aura around a pricing card

```preview-html
<x-aura style="rainbow">
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
            <x-button color="primary" class="mt-6 w-full">Subscribe</x-button>
        </div>
    </div>
</x-aura>
```

## Aura sizes

```preview-html
<x-aura size="xs">
    <x-button>XS</x-button>
</x-aura>
<x-aura size="sm">
    <x-button>SM</x-button>
</x-aura>
<x-aura size="md">
    <x-button>MD</x-button>
</x-aura>
<x-aura size="lg">
    <x-button>LG</x-button>
</x-aura>
<x-aura size="xl">
    <x-button>XL</x-button>
</x-aura>
```

## Custom animation duration

```preview-html
<x-aura style="rainbow" class="duration-2000">
    <x-button>2000ms duration aura</x-button>
</x-aura>
```

---

## Reference

### Aura Attributes

| Name | Default | Description |
| --- | --- | --- |
| `style` | `null` | The aura style: `dual` , `rainbow` , `holo` , `glow` , `gold` , or `silver` . |
| `size` | `null` | The aura size: `xs` , `sm` , `md` , `lg` , or `xl` . |

### Aura Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The element wrapped by the aura effect. |
