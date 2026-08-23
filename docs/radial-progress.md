# Radial progress

Radial progress can be used to show the progress of a task or to show the passing of time.

```preview-html
<x-radial-progress :value="65">65%</x-radial-progress>
```

## Different values

```preview-html
<x-radial-progress value="0">0%</x-radial-progress>
<x-radial-progress value="20">20%</x-radial-progress>
<x-radial-progress value="60">60%</x-radial-progress>
<x-radial-progress value="80">80%</x-radial-progress>
<x-radial-progress value="100">100%</x-radial-progress>
```

## Custom color

```preview-html
<x-radial-progress :value="23" class="text-primary">23%</x-radial-progress>
```

## With background color and border

```preview-html
<x-radial-progress :value="41" class="bg-primary text-primary-content border-primary border-4">41%</x-radial-progress>
```

## Custom size and thickness

```preview-html
<x-radial-progress :value="65" size="120" thickness="2">65%</x-radial-progress>
<x-radial-progress :value="36" size="120" thickness="20">36%</x-radial-progress>
```

## Responsive radial progress

```preview-html
<x-radial-progress :value="16" class="size-12 md:size-24 lg:size-32">16%</x-radial-progress>
```

## Advance

```preview-html
<x-radial-progress value="0" x-bind:value="progress" x-bind:style="'--value:' + progress" class="text-primary">
    <span x-text="progress + '%'"></span>
</x-radial-progress>

<div class="flex gap-2">
    <x-button size="sm" x-on:click="progress = Math.max(0, progress - 10)">Decrease</x-button>
    <x-button size="sm" x-on:click="progress = Math.min(100, progress + 10)">Increase</x-button>
</div>
```

---

## Reference

### RadialProgress Attributes

| Name | Default | Description |
|---|---|---|
| `value` | `0` | The current progress value. |
| `size` | `80` | The size in pixels. |
| `thickness` | `8` | The border thickness. |

### RadialProgress Slot

| Name | Default | Description |
|---|---|---|
| Default | Empty | Content displayed inside the progress indicator. |
