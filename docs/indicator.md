# Indicator

Indicators are used to place an element on the corner of another element.

## Status indicator

```preview-html
<x-indicator class="grid w-32 h-32 rounded bg-base-300 place-items-center">
    <x-indicator-item>
        <x-status color="success"></x-status>
    </x-indicator-item>
    content
</x-indicator>
```

## Badge as indicator

```preview-html
<x-indicator class="grid w-32 h-32 rounded bg-base-300 place-items-center">
    <x-indicator-item>
        <x-badge color="primary">New</x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

## For button

```preview-html
<x-indicator>
    <x-indicator-item>
        <x-badge color="secondary">12</x-badge>
    </x-indicator-item>
    <x-button>inbox</x-button>
</x-indicator>
```

## For avatar

```preview-html
<x-indicator>
    <x-indicator-item>
        <x-badge color="secondary">Justice</x-badge>
    </x-indicator-item>
    <div class="size-20 rounded-lg overflow-hidden">
        <img alt="Tailwind CSS examples" src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
    </div>
</x-indicator>
```

## For an input

```preview-html
<x-indicator>
    <x-indicator-item>
        <x-badge>Required</x-badge>
    </x-indicator-item>
    <input type="text" placeholder="Your email address" class="input" />
</x-indicator>
```

## A button as an indicator for a card

```preview-html
<x-indicator class="my-6 mx-10">
    <x-indicator-item vertical="bottom">
        <x-button color="primary">Apply</x-button>
    </x-indicator-item>
    <div class="border border-base-300 shadow-sm card bg-base-100">
        <div class="card-body">
            <h2 class="card-title">Job Title</h2>
            <p>Rerum reiciendis beatae tenetur excepturi</p>
        </div>
    </div>
</x-indicator>
```

## In center of an image

```preview-html
<x-indicator class="max-w-xs">
    <x-indicator-item horizontal="center" vertical="middle">
        <x-badge>Only available for Pro users</x-badge>
    </x-indicator-item>
    <img alt="Tailwind CSS examples" class="rounded" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" />
</x-indicator>
```

## Indicator item positions

### Top (default) + start

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="start">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Top (default) + center

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="center">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Top (default) + end (default)

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item>
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Middle + start

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="start" vertical="middle">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Middle + center

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="center" vertical="middle">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Middle + end (default)

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item vertical="middle">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Bottom + start

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="start" vertical="bottom">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Bottom + center

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="center" vertical="bottom">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

### Bottom + end (default)

```preview-html
<x-indicator class="grid w-32 h-32 bg-base-300 place-items-center">
    <x-indicator-item vertical="bottom">
        <x-badge color="secondary"></x-badge>
    </x-indicator-item>
    content
</x-indicator>
```

## Multiple indicators

```preview-html
<x-indicator class="grid w-60 h-32 bg-base-300 place-items-center">
    <x-indicator-item horizontal="start" vertical="top">
        <x-badge>↖︎</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="center" vertical="top">
        <x-badge>↑</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="end" vertical="top">
        <x-badge>↗︎</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="start" vertical="middle">
        <x-badge>←</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="center" vertical="middle">
        <x-badge>●</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="end" vertical="middle">
        <x-badge>→</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="start" vertical="bottom">
        <x-badge>↙︎</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="center" vertical="bottom">
        <x-badge>↓</x-badge>
    </x-indicator-item>
    <x-indicator-item horizontal="end" vertical="bottom">
        <x-badge>↘︎</x-badge>
    </x-indicator-item>
    Box
</x-indicator>
```

---

## Reference

### Indicator Attributes

| Name | Default | Description                     |
|------|---------|---------------------------------|
| —    | —       | The component accepts no props. |

### Indicator Slot

| Name    | Default | Description                                                                          |
|---------|---------|--------------------------------------------------------------------------------------|
| Default | —       | The content to place the indicator on, along with any `<x-indicator-item>` elements. |

### IndicatorItem Attributes

| Name         | Default | Description                                        |
|--------------|---------|----------------------------------------------------|
| `horizontal` | `null`  | Horizontal alignment: `start`, `center`, or `end`. |
| `vertical`   | `null`  | Vertical alignment: `top`, `middle`, or `bottom`.  |

### IndicatorItem Slot

| Name    | Default | Description                                                       |
|---------|---------|-------------------------------------------------------------------|
| Default | —       | The indicator element content (e.g., a badge, status, or button). |
