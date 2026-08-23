# Link

Link adds the missing underline style to links.

```preview-tabs
:::code Vanilla html
<x-link href="#">Click me</x-link>
:::

:::code Alpine.js html
<x-link href="#">Click me</x-link>
:::

:::code Livewire blade
<x-link href="/" wire:navigate>Click me</x-link>
:::

:::code HTMX html
<x-link href="/page" hx-get="/page" hx-push-url="true" hx-target="#content">Click me</x-link>
:::

:::preview
<x-link href="#">Click me</x-link>
:::
```

## Link colors

```preview-html
<x-link color="neutral">Neutral</x-link>
<x-link color="primary">Primary</x-link>
<x-link color="secondary">Secondary</x-link>
<x-link color="accent">Accent</x-link>
<x-link color="info">Info</x-link>
<x-link color="success">Success</x-link>
<x-link color="warning">Warning</x-link>
<x-link color="error">Error</x-link>
```

## Show underline only on hover

```preview-html
<x-link hover>I am a link but I only show underline on hover</x-link>
```

## Link in text

```preview-html
<x-link class="text-xs md:text-sm lg:text-md xl:text-lg">Responsive Link</x-link>
```

## Advance

```preview-tabs
:::code Vanilla html
<x-link
        href="https://github.com/bladeuix/components"
        target="_blank"
        rel="noopener noreferrer"
        onclick="event.preventDefault(); console.log('Link clicked'); window.location.href = this.href"
>
    <p>GitHub Repository</p>
</x-link>
:::

:::code Alpine.js html
<x-link
        href="https://github.com/bladeuix/components"
        target="_blank"
        rel="noopener noreferrer"
        @click.prevent="console.log('Link clicked'); window.location.href = $el.href"
>
    <p>GitHub Repository</p>
</x-link>
:::

:::code Livewire blade
<a
    href="https://github.com/bladeuix/components"
    class="link"
    wire:navigate
    @click="$dispatch('link-clicked', { url: $el.href })"
>
    <p>GitHub Repository</p>
</a>
:::

:::code HTMX html
<x-link
        href="https://github.com/bladeuix/components"
        target="_blank"
        rel="noopener noreferrer"
        hx-get="/link/click"
        hx-trigger="click"
        hx-swap="none"
>
    <p>GitHub Repository</p>
</x-link>
:::

:::preview
<x-link
        href="https://github.com/bladeuix/components"
        target="_blank"
        rel="noopener noreferrer"
        title="Visit DaisyUI on GitHub"
        aria-label="DaisyUI GitHub Repository"
        onclick="console.log('Link clicked')"
>
    <p>GitHub Repository</p>
</x-link>
:::
```

---

## Reference

### Link Attributes

| Name | Default | Description |
|------|---------|-------------|
| `color` | `null` | The link color: `neutral`, `primary`, `secondary`, `accent`, `info`, `success`, `warning`, or `error`. |
| `hover` | `false` | Shows the underline only on hover. |

### Link Slot

| Name | Default | Description |
|------|---------|-------------|
| Default | Empty | The link text content. |