# Toast

Toast is a wrapper to stack elements, positioned on the corner of page.

## Toast with alert inside

```preview-html
<x-toast class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New message arrived.</span>
    </div>
</x-toast>
```

## toast-top toast-start

```preview-html
<x-toast horizontal="start" vertical="top" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-top toast-center

```preview-html
<x-toast horizontal="center" vertical="top" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-top toast-end

```preview-html
<x-toast horizontal="end" vertical="top" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-start toast-middle

```preview-html
<x-toast horizontal="start" vertical="middle" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-center toast-middle

```preview-html
<x-toast horizontal="center" vertical="middle" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-end toast-middle

```preview-html
<x-toast horizontal="end" vertical="middle" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-start toast-bottom (default)

```preview-html
<x-toast horizontal="start" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-center toast-bottom (default)

```preview-html
<x-toast horizontal="center" class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

## toast-end (default) toast-bottom (default)

```preview-html
<x-toast class="relative h-64 w-full">
    <div class="alert alert-info">
        <span>New mail arrived.</span>
    </div>
    <div class="alert alert-success">
        <span>Message sent successfully.</span>
    </div>
</x-toast>
```

---

## Reference

### Toast Attributes

| Name | Default | Description |
| --- | --- | --- |
| `horizontal` | `end` | Horizontal alignment: `start`, `center`, or `end`. |
| `vertical` | `bottom` | Vertical alignment: `top`, `middle`, or `bottom`. |

### Toast Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The toast content (alerts, notifications, etc.). |
