# Diff

Diff component shows a side-by-side comparison of two items.

## Diff

```preview-html
<x-diff class="aspect-16/9 rounded-field">
    <x-slot:item1>
        <img alt="daisy" src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a.webp" />
    </x-slot:item1>
    <x-slot:item2>
        <img alt="daisy" src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a-blur.webp" />
    </x-slot:item2>
</x-diff>
```

## Diff text

```preview-html
<x-diff class="aspect-16/9 rounded-field">
    <x-slot:item1>
        <div class="bg-primary text-primary-content text-4xl lg:text-9xl font-black grid place-content-center">BLADEUIX</div>
    </x-slot:item1>
    <x-slot:item2>
        <div class="bg-base-200 text-4xl lg:text-9xl font-black grid place-content-center">BLADEUIX</div>
    </x-slot:item2>
</x-diff>
```

---

## Reference

### Diff Attributes

| Name | Default | Description                     |
|------|---------|---------------------------------|
| —    | —       | The component accepts no props. |

### Diff Slots

| Name      | Default | Description                           |
|-----------|---------|---------------------------------------|
| `item1`   | —       | The first item content (left side).   |
| `item2`   | —       | The second item content (right side). |
| `resizer` | —       | Optional custom resizer element.      |
