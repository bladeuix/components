# Skeleton

Skeleton is a component that can be used to show a loading state of a component.

```preview-html
<x-skeleton class="h-32 w-32" />
```

## Skeleton - circle with content

```preview-html
<div class="flex flex-col gap-4 w-52">
    <div class="flex items-center gap-4">
        <x-skeleton class="h-16 w-16 shrink-0 rounded-full" />
        <div class="flex flex-col gap-4">
            <x-skeleton class="h-4 w-20" />
            <x-skeleton class="h-4 w-28" />
        </div>
    </div>
    <x-skeleton class="h-32 w-full" />
</div>
```

## Skeleton - rectangle with content

```preview-html
<div class="flex flex-col gap-4 w-52">
    <x-skeleton class="h-32 w-full" />
    <x-skeleton class="h-4 w-28" />
    <x-skeleton class="h-4 w-full" />
    <x-skeleton class="h-4 w-full" />
</div>
```

## skeleton-text - animated gradient text

```preview-html
<x-skeleton text>AI is thinking harder...</x-skeleton>
```

---

## Reference

### Skeleton Attributes

| Name   | Default | Description                                          |
|--------|---------|------------------------------------------------------|
| `text` | `false` | Animates the text color instead of background color. |

### Skeleton Slot

| Name    | Default | Description           |
|---------|---------|-----------------------|
| Default | Empty   | The skeleton content. |
