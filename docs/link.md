# Link

Link adds the missing underline style to links.

```preview-html
<x-link href="#">Click me</x-link>
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

```preview-html
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