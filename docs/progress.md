# Progress

Progress bar can be used to show the progress of a task or to show the passing of time.

```preview-html
<x-progress value="50" max="100" class="w-56"/>
```

## Progress colors

```preview-html
<x-progress color="primary" value="10" max="100" class="w-56"/>
<x-progress color="secondary" value="40" max="100" class="w-56"/>
<x-progress color="accent" value="70" max="100" class="w-56"/>
<x-progress color="neutral" value="100" max="100" class="w-56"/>
<br>
<x-progress color="info" value="10" max="100" class="w-56"/>
<x-progress color="success" value="40" max="100" class="w-56"/>
<x-progress color="warning" value="70" max="100" class="w-56"/>
<x-progress color="error" value="100" max="100" class="w-56"/>
```

## Indeterminate (without value)

```preview-html
<x-progress class="w-56"/>
```

## Responsive progress

```preview-html
<x-progress
        value="40"
        max="100"
        class="w-24 md:w-56 lg:w-80"
/>
```

## Advance

```preview-html
<div class="flex flex-col gap-4 items-center" x-data="{ progress: 50 }">
    <x-progress value="0" x-bind:value="progress" max="100" color="primary"/>
    <div class="flex gap-2">
        <x-button size="sm" x-on:click="progress = Math.max(0, progress - 10)">Decrease</x-button>
        <x-button size="sm" x-on:click="progress = Math.min(100, progress + 10)">Increase</x-button>
    </div>
    <span x-text="`Current progress: ${progress}%`" class="text-sm font-bold"></span>
</div>
```

---

## Reference

### Progress Attributes

| Name | Default | Description |
|------|---------|-------------|
| `value` | `null` | The current progress value. Omit for indeterminate mode. |
| `max` | `100` | The maximum progress value. |
| `color` | `null` | The progress color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |