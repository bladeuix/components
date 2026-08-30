# Stack

Stack visually puts elements on top of each other.

> You can use `w-*` and `h-*` classes to set the width and height of the stack, making all items the same size.

## 3 divs in a stack

```preview-html
<x-stack class="h-20 w-32">
    <div class="grid rounded-box bg-primary text-primary-content place-content-center">1</div>
    <div class="grid rounded-box bg-accent text-accent-content place-content-center">2</div>
    <div class="grid rounded-box bg-secondary text-secondary-content place-content-center">3</div>
</x-stack>
```

## Stacked images

```preview-html
<x-stack class="w-48">
    <img src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" alt="Tailwind CSS example 1" class="rounded-box" />
    <img src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" alt="Tailwind CSS example 2" class="rounded-box" />
    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Tailwind CSS example 3" class="rounded-box" />
</x-stack>
```

## Stacked cards

```preview-html
<x-stack class="size-28">
    <x-card class="bg-base-100 border border-base-content text-center">A</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">B</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">C</x-card>
</x-stack>
```

## Stacked cards (top direction)

```preview-html
<x-stack direction="top" class="size-28">
    <x-card class="bg-base-100 border border-base-content text-center">A</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">B</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">C</x-card>
</x-stack>
```

## Stacked cards (start direction)

```preview-html
<x-stack direction="start" class="size-28">
    <x-card class="bg-base-100 border border-base-content text-center">A</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">B</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">C</x-card>
</x-stack>
```

## Stacked cards (end direction)

```preview-html
<x-stack direction="end" class="size-28">
    <x-card class="bg-base-100 border border-base-content text-center">A</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">B</x-card>
    <x-card class="bg-base-100 border border-base-content text-center">C</x-card>
</x-stack>
```

## Stacked cards with shadow

```preview-html
<x-stack>
    <x-card class="bg-base-200 text-center shadow-md">A</x-card>
    <x-card class="bg-base-200 text-center shadow">B</x-card>
    <x-card class="bg-base-200 text-center shadow-sm">C</x-card>
</x-stack>
```

## Stacked notification cards

```preview-html
<x-stack>
    <x-card class="bg-base-100 shadow-md" title="Notification 1">
        You have 3 unread messages. Tap here to see.
    </x-card>
    <x-card class="bg-base-100 shadow-md" title="Notification 2">
        You have 3 unread messages. Tap here to see.
    </x-card>
    <x-card class="bg-base-100 shadow-md" title="Notification 3">
        You have 3 unread messages. Tap here to see.
    </x-card>
</x-stack>
```

---

## Reference

### Stack Attributes

| Name        | Default | Description                                                  |
|-------------|---------|--------------------------------------------------------------|
| `direction` | `null`  | The stack direction: `top` , `bottom` , `start` , or `end` . |

### Stack Slot

| Name    | Default | Description           |
|---------|---------|-----------------------|
| Default | Empty   | The stacked elements. |
