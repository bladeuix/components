# Kbd

Kbd is used to show which key is being pressed on the keyboard.

```preview-html
<x-kbd>Q</x-kbd>
```

## Kbd sizes

```preview-html
<x-kbd size="xs">X</x-kbd>
<x-kbd size="sm">S</x-kbd>
<x-kbd size="md">M</x-kbd>
<x-kbd size="lg">L</x-kbd>
<x-kbd size="xl">X</x-kbd>
```

## Keyboard shortcuts

```preview-html
<div class="flex flex-col gap-2">
  <div class="flex gap-2">
    <x-kbd size="sm">ctrl</x-kbd>
    <x-kbd size="sm">K</x-kbd>
  </div>
  <div class="flex gap-2">
    <x-kbd size="sm">shift</x-kbd>
    <x-kbd size="sm">alt</x-kbd>
    <x-kbd size="sm">F</x-kbd>
  </div>
</div>
```

## Kbd with custom classes

```preview-html
<x-kbd class="btn btn-primary">Q</x-kbd>
```

---

## Reference

### Kbd Attributes

| Name | Default | Description |
| --- | --- | --- |
| `size` | `null` | The kbd size: `xs` , `sm` , `md` , `lg` , or `xl` . |

### Kbd Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The keyboard key content. |
