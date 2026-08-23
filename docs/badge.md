# Badge

Badges are used to inform the user of the status of specific data.

```preview-html
<x-badge>Badge</x-badge>
```

## Badge sizes

```preview-html
<x-badge size="xs">Xsmall</x-badge>
<x-badge size="sm">Small</x-badge>
<x-badge size="md">Medium</x-badge>
<x-badge size="lg">Large</x-badge>
<x-badge size="xl">Xlarge</x-badge>
```

## Badge with colors

```preview-html
<x-badge color="primary">Primary</x-badge>
<x-badge color="secondary">Secondary</x-badge>
<x-badge color="accent">Accent</x-badge>
<x-badge color="neutral">Neutral</x-badge>
<x-badge color="info">Info</x-badge>
<x-badge color="success">Success</x-badge>
<x-badge color="warning">Warning</x-badge>
<x-badge color="error">Error</x-badge>
```

## Badge with soft style

```preview-html
<x-badge variant="soft" color="primary">Primary</x-badge>
<x-badge variant="soft" color="secondary">Secondary</x-badge>
<x-badge variant="soft" color="accent">Accent</x-badge>
<x-badge variant="soft" color="info">Info</x-badge>
<x-badge variant="soft" color="success">Success</x-badge>
<x-badge variant="soft" color="warning">Warning</x-badge>
<x-badge variant="soft" color="error">Error</x-badge>
```

## Badge with outline style

```preview-html
<x-badge variant="outline" color="primary">Primary</x-badge>
<x-badge variant="outline" color="secondary">Secondary</x-badge>
<x-badge variant="outline" color="accent">Accent</x-badge>
<x-badge variant="outline" color="info">Info</x-badge>
<x-badge variant="outline" color="success">Success</x-badge>
<x-badge variant="outline" color="warning">Warning</x-badge>
<x-badge variant="outline" color="error">Error</x-badge>
```

## Badge with dash style

```preview-html
<x-badge variant="dash" color="primary">Primary</x-badge>
<x-badge variant="dash" color="secondary">Secondary</x-badge>
<x-badge variant="dash" color="accent">Accent</x-badge>
<x-badge variant="dash" color="info">Info</x-badge>
<x-badge variant="dash" color="success">Success</x-badge>
<x-badge variant="dash" color="warning">Warning</x-badge>
<x-badge variant="dash" color="error">Error</x-badge>
```

## Badge ghost

```preview-html
<x-badge variant="ghost">Ghost</x-badge>
```

## Empty badge

```preview-html
<x-badge color="primary" size="lg"></x-badge>
<x-badge color="primary" size="md"></x-badge>
<x-badge color="primary" size="sm"></x-badge>
<x-badge color="primary" size="xs"></x-badge>
```

## Badge with icon

```preview-html
<x-badge color="info">
    <svg class="size-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="M12 11.5V17"></path>
        <circle cx="12" cy="7.25" r="1.25" fill="currentColor" stroke="none"></circle>
    </svg>
    <p>Info</p>
</x-badge>
<x-badge color="success">
    <svg class="size-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="m7 13 3 3 7-8"></path>
    </svg>
    <p>Success</p>
</x-badge>
```

## Badge in text

```preview-html
<h1 class="text-xl font-semibold">
    <p>Heading 1</p>
    <x-badge size="xl">Badge</x-badge>
</h1>
<h2 class="text-lg font-semibold">
    <p>Heading 2</p>
    <x-badge size="lg">Badge</x-badge>
</h2>
<p class="text-xs">
<p>Paragraph</p>
<x-badge size="xs">Badge</x-badge>
</p>
```

## Badge in a button

```preview-html
<x-button>
    <p>Inbox</p>
    <x-badge size="sm">+99</x-badge>
</x-button>
<x-button>
    <p>Inbox</p>
    <x-badge size="sm" color="secondary">+99</x-badge>
</x-button>
```

## Advance

```preview-html
<x-badge
        color="warning"
        variant="outline"
        id="notification-badge"
        aria-label="Pending notifications"
>
    <p>12 pending</p>
</x-badge>
```

---

## Reference

### Badge Attributes

| Name | Default | Description |
| --- | --- | --- |
| `size` | `null` | The badge size: `xs` , `sm` , `md` , `lg` , or `xl` . |
| `color` | `null` | The badge color: `primary` , `secondary` , `accent` , `neutral` , `info` , `success` , `warning` , or `error` . |
| `variant` | `null` | The badge variant: `soft` , `outline` , `dash` , or `ghost` . |

### Badge Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The badge content. |
